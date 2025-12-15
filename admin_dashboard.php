<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background: #0d6efd;
      color: #fff;
      flex-shrink: 0;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 12px 20px;
    }
    .sidebar a:hover {
      background: rgba(255, 255, 255, 0.2);
    }
    .content {
      flex-grow: 1;
      background: #f8f9fa;
      padding: 20px;
    }
    .topbar {
      background: #fff;
      padding: 15px;
      border-bottom: 1px solid #ddd;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="text-center py-3">Admin Panel</h4>
    <a href="#" data-bs-toggle="modal" data-bs-target="#noticeModal">📢 Manage Notice</a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#teacherModal">👨‍🏫 Manage Teachers</a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#studentModal">🎓 Manage Students</a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#departmentModal">🏫 Manage Departments</a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#settingsModal">⚙️ Settings</a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">🚪 Logout</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">
      <h5>Welcome, Admin</h5>
      <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
    </div>

    <!-- Dashboard Widgets -->
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Total Students</h5>
            <p class="display-6"><?php echo $total_students; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Total Teachers</h5>
            <p class="display-6"><?php echo $total_teachers; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Departments</h5>
            <p class="display-6"><?php echo $total_departments; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Notices</h5>
            <p class="display-6"><?php echo $total_notices; ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="mt-4">
      <h5>Recent Activity</h5>
      <ul class="list-group">
        <?php foreach ($recent_activities as $activity) { ?>
          <li class="list-group-item"><?php echo $activity; ?></li>
        <?php } ?>
      </ul>
    </div>
  </div>

  <!-- Modals -->

  <!-- Notice Modal -->
  <div class="modal fade" id="noticeModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Manage Notices</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label>Title</label>
              <input type="text" name="notice_title" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Content</label>
              <textarea name="notice_content" class="form-control" required></textarea>
            </div>
            <button type="submit" name="add_notice" class="btn btn-primary">Add Notice</button>
          </form>
          <hr>
          <h6>Existing Notices</h6>
          <ul class="list-group">
            <?php $notices = $conn->query("SELECT * FROM notices"); while ($row = $notices->fetch_assoc()) { ?>
              <li class="list-group-item d-flex justify-content-between">
                <?php echo $row['title']; ?>
                <form method="POST" style="display:inline;">
                  <input type="hidden" name="notice_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_notice" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Teacher Modal -->
  <div class="modal fade" id="teacherModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Manage Teachers</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="teacher_name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="teacher_email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Department</label>
              <select name="teacher_dept" class="form-control" required>
                <?php $depts = $conn->query("SELECT * FROM departments"); while ($row = $depts->fetch_assoc()) { ?>
                  <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                <?php } ?>
              </select>
            </div>
            <button type="submit" name="add_teacher" class="btn btn-primary">Add Teacher</button>
          </form>
          <hr>
          <h6>Existing Teachers</h6>
          <ul class="list-group">
            <?php $teachers = $conn->query("SELECT * FROM teachers"); while ($row = $teachers->fetch_assoc()) { ?>
              <li class="list-group-item d-flex justify-content-between">
                <?php echo $row['name'] . ' (' . $row['email'] . ')'; ?>
                <form method="POST" style="display:inline;">
                  <input type="hidden" name="teacher_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_teacher" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Student Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Manage Students</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="student_name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="student_email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Department</label>
              <select name="student_dept" class="form-control" required>
                <?php $depts = $conn->query("SELECT * FROM departments"); while ($row = $depts->fetch_assoc()) { ?>
                  <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                <?php } ?>
              </select>
            </div>
            <button type="submit" name="add_student" class="btn btn-primary">Add Student</button>
          </form>
          <hr>
          <h6>Existing Students</h6>
          <ul class="list-group">
            <?php $students = $conn->query("SELECT * FROM students"); while ($row = $students->fetch_assoc()) { ?>
              <li class="list-group-item d-flex justify-content-between">
                <?php echo $row['name'] . ' (' . $row['email'] . ')'; ?>
                <form method="POST" style="display:inline;">
                  <input type="hidden" name="student_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_student" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Department Modal -->
  <div class="modal fade" id="departmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Manage Departments</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label>Department Name</label>
              <input type="text" name="dept_name" class="form-control" required>
            </div>
            <button type="submit" name="add_department" class="btn btn-primary">Add Department</button>
          </form>
          <hr>
          <h6>Existing Departments</h6>
          <ul class="list-group">
            <?php $departments = $conn->query("SELECT * FROM departments"); while ($row = $departments->fetch_assoc()) { ?>
              <li class="list-group-item d-flex justify-content-between">
                <?php echo $row['name']; ?>
                <form method="POST" style="display:inline;">
                  <input type="hidden" name="dept_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_department" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Settings Modal -->
  <div class="modal fade" id="settingsModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Settings</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label>New Password</label>
              <input type="password" name="new_password" class="form-control" required>
            </div>
            <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Logout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to logout?</p>
          <a href="logout.php" class="btn btn-danger">Yes, Logout</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
