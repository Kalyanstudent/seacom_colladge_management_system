<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIRMS | Examination System Login</title>
  <link rel="stylesheet" href="style.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f3f3f3;
      font-family: Arial, sans-serif;
    }

    /* Container */
    .container {
      text-align: center;
      padding: 40px;
    }

    .title {
      font-size: 28px;
      margin-bottom: 30px;
      font-weight: bold;
    }

    /* Login Boxes */
    .login-boxes {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .box {
      width: 250px;
      padding: 20px;
      border-radius: 10px;
      text-decoration: none;
      color: black;
      background: white;
      box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      text-align: center;
    }

    .box:hover {
      transform: translateY(-5px);
    }

    .icon {
      width: 60px;
      margin-bottom: 10px;
    }

    .student {
      border-top: 6px solid #2196f3;
    }

    .teacher {
      border-top: 6px solid #ff9800;
    }

    .admin {
      border-top: 6px solid #4caf50;
    }

    /* Header */
    header {
      padding: 12px 20px;
      background: #003366;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .logo-wrap {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-img {
      width: 50px;
      height: 50px;
      background: white;
      border-radius: 6px;
      padding: 5px;
    }

    .small-icon {
      width: 18px;
      vertical-align: middle;
      margin-right: 4px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 15px;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    /* Hamburger */
    .hamburger {
      display: none;
      font-size: 28px;
      cursor: pointer;
      user-select: none;
    }

    /* Mobile Menu */
    #mobileMenu {
      display: none;
      background: #003366;
      padding: 15px;
      text-align: left;
    }

    #mobileMenu a {
      display: block;
      padding: 10px 0;
      color: white;
      text-decoration: none;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    #mobileMenu.show {
      display: block;
    }

    /* Footer */
    footer {
      background: #003366;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      font-size: 14px;
    }

    @media(max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hamburger {
        display: block;
      }

      footer {
        flex-direction: column;
        text-align: center;
        gap: 10px;
      }
    }
  </style>

</head>

<body>

  <!-- HEADER -->
  <header>
    <div class="logo-wrap">
      <img src="include/image/logo.jpg" alt="CIRMS logo" class="logo-img">
      <div class="logo-text">
        <div class="logo-title">College Information & Resource Management System</div>
        <div class="logo-sub">CIRMS — Mobile Friendly Portal</div>
      </div>
    </div>

    <!-- Desktop Navigation -->
    <nav class="nav-links">
      <a href="index.html">Home</a>

      <a href="student-login.html">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="small-icon"> Student
      </a>

      <a href="teacher-login.html">
        <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" class="small-icon"> Teacher
      </a>

      <a href="admin-login.html">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828506.png" class="small-icon"> Admin
      </a>
    </nav>

    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleMenu()">☰</div>
  </header>

  <!-- MOBILE MENU -->
  <div id="mobileMenu">
    <a href="index.html">Home</a>
    <a href="student-login.html">Student Login</a>
    <a href="teacher-login.html">Teacher Login</a>
    <a href="admin-login.html">Admin Login</a>
  </div>

  <!-- MAIN CONTENT -->
  <div class="container">

    <h2 class="title">EXAMINATION SYSTEM</h2>

    <div class="login-boxes">

      <a href="student-login.html" class="box student">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="icon">
        <h3>STUDENT LOGIN</h3>
        <p>Click here to login</p>
      </a>

      <a href="teacher-login.html" class="box teacher">
        <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" class="icon">
        <h3>TEACHER LOGIN</h3>
        <p>Click here to login</p>
      </a>

      <a href="admin-login.html" class="box admin">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828506.png" class="icon">
        <h3>ADMIN LOGIN</h3>
        <p>Click here to login</p>
      </a>

    </div>

  </div>

  <!-- FOOTER -->
  <footer>
    <div class="footer-left">
      © <span id="year"></span> CIRMS | All Rights Reserved<br>
      College Location: Kolkata, West Bengal, India
    </div>

    <div class="footer-right">
      Helpline: +91 98765 43210<br>
      Email: support@college.ac.in
    </div>
  </footer>

</body>

</html>

<script>
  // Auto update year
  document.getElementById("year").textContent = new Date().getFullYear();

  // Mobile menu toggle
  function toggleMenu() {
    document.getElementById("mobileMenu").classList.toggle("show");
  }
</script>
