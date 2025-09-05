<?php

?>

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
    <a href="#">📢 Manage Notice</a>
    <a href="#">👨‍🏫 Manage Teachers</a>
    <a href="#">🎓 Manage Students</a>
    <a href="#">🏫 Manage Departments</a>
    <a href="#">⚙️ Settings</a>
    <a href="#">🚪 Logout</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">
      <h5>Welcome, Admin</h5>
      <button class="btn btn-outline-primary btn-sm">Logout</button>
    </div>

    <!-- Dashboard Widgets -->
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Total Students</h5>
            <p class="display-6">1200</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Total Teachers</h5>
            <p class="display-6">80</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Departments</h5>
            <p class="display-6">6</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Notices</h5>
            <p class="display-6">15</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="mt-4">
      <h5>Recent Activity</h5>
      <ul class="list-group">
        <li class="list-group-item">📢 New Notice Added: Exam Schedule</li>
        <li class="list-group-item">👨‍🏫 Teacher "Mr. Sharma" Added</li>
        <li class="list-group-item">🎓 Student "Rahul Roy" Removed</li>
        <li class="list-group-item">🏫 Department "IT" Updated</li>
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
