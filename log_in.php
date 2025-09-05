<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Role Based Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url("include/image/log_in.jpg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-card {
      max-width: 400px;
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(17, 17, 17, 0.53);
      padding: 30px;
      background: rgba(255, 255, 255, 0.15);
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h3 class="text-center mb-4">Login</h3>
    <form>
      <!-- Role Selection -->
      <div class="mb-3">
        <label for="role" class="form-label">Select Role</label>
        <select class="form-select" id="role" required>
          <option value="">-- Choose Role --</option>
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Email / Username -->
      <div class="mb-3">
        <label for="username" class="form-label">Username or Email</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username or email" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
      </div>

      <!-- Remember Me -->
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="remember">
        <label class="form-check-label" for="remember">
          Remember me
        </label>
      </div>

      <!-- Login Button -->
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
