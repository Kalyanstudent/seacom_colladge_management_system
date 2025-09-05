<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background: #6f42c1; /* Purple for student */
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
    <h4 class="text-center py-3">Student Panel</h4>
    <a href="#">📚 My Subjects</a>
    <a href="#">📅 Class Schedule</a>
    <a href="#">📝 Attendance</a>
    <a href="#">📂 Study Materials</a>
    <a href="#">📢 Notices</a>
    <a href="#">📊 Results</a>
    <a href="#">🚪 Logout</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">
      <h5>Welcome, Student</h5>
      <button class="btn btn-outline-dark btn-sm">Logout</button>
    </div>

    <!-- Dashboard Widgets -->
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">My Subjects</h5>
            <p class="display-6">6</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Attendance</h5>
            <p class="display-6">85%</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Assignments</h5>
            <p class="display-6">4</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Notices</h5>
            <p class="display-6">3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Section -->
    <div class="mt-4">
      <h5>Upcoming Classes</h5>
      <ul class="list-group mb-3">
        <li class="list-group-item">📖 CSE101 - Monday 09:00 AM</li>
        <li class="list-group-item">📖 DBMS - Tuesday 11:00 AM</li>
        <li class="list-group-item">📖 OS - Wednesday 02:00 PM</li>
      </ul>

      <h5>Recent Notices</h5>
      <ul class="list-group">
        <li class="list-group-item">📢 Exam Form Submission Last Date: 20th Sept</li>
        <li class="list-group-item">📢 College Fest Registration Open</li>
        <li class="list-group-item">📢 New Library Books Available</li>
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
