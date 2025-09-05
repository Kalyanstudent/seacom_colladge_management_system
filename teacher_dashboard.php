<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teacher Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background: #198754; /* Green for teacher */
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
    <h4 class="text-center py-3">Teacher Panel</h4>
    <a href="#">📚 My Classes</a>
    <a href="#">👨‍🎓 My Students</a>
    <a href="#">📝 Attendance</a>
    <a href="#">📢 Notices</a>
    <a href="#">📂 Upload Materials</a>
    <a href="#">🚪 Logout</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">
      <h5>Welcome, Teacher</h5>
      <button class="btn btn-outline-success btn-sm">Logout</button>
    </div>

    <!-- Dashboard Widgets -->
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Total Students</h5>
            <p class="display-6">150</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">My Classes</h5>
            <p class="display-6">5</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Subjects</h5>
            <p class="display-6">3</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Notices</h5>
            <p class="display-6">7</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Section -->
    <div class="mt-4">
      <h5>Upcoming Classes</h5>
      <ul class="list-group mb-3">
        <li class="list-group-item">📖 CSE101 - Monday 10:00 AM</li>
        <li class="list-group-item">📖 IT205 - Tuesday 12:00 PM</li>
        <li class="list-group-item">📖 DBMS - Thursday 02:00 PM</li>
      </ul>

      <h5>Recent Notices</h5>
      <ul class="list-group">
        <li class="list-group-item">📢 Faculty Meeting - Friday</li>
        <li class="list-group-item">📢 Submit Student Marks by 20th</li>
        <li class="list-group-item">📢 New Exam Guidelines Released</li>
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
