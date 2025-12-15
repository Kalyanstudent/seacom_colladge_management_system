<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIRMS | Examination System Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .container {
      flex: 1;
      /* footer কে নিচে ঠেলে রাখবে */
    }

    footer {
      margin-top: auto;
      /* sticky bottom fix */
    }

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
      background-image: url("include/image/frontpage_background.jpg");
      background-size: cover;
      background-position: center;
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

    .nav-links button {
      background: none;
      border: none;
      color: white;
      font-size: 15px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .nav-links button:hover {
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
    }

    #mobileMenu.show {
      display: block;
    }

    #mobileMenu button {
      width: 100%;
      padding: 10px;
      background: none;
      border: none;
      color: white;
      text-align: left;
      font-size: 16px;
      display: flex;
      align-items: center;
      gap: 6px;
      cursor: pointer;
    }

    #mobileMenu button:hover {
      background: rgba(255, 255, 255, 0.1);
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

    /* MODAL STYLES */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    .modal-content {
      background: #fff;
      width: 90%;
      max-width: 350px;
      margin: 10% auto;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    .modal-content input {
      width: 85%;
      padding: 10px;
      margin: 10px 0;
    }

    .modal-content button {
      width: 92%;
      padding: 10px;
      border: none;
      background: #003366;
      color: white;
      cursor: pointer;
    }

    .close {
      float: right;
      font-size: 22px;
      cursor: pointer;
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
      <button onclick="location.href='log_in.php'">Home</button>

      <button onclick="openModal('studentModal')">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="small-icon"> Student
      </button>

      <button onclick="openModal('teacherModal')">
        <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" class="small-icon"> Teacher
      </button>

      <button onclick="openModal('adminModal')">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828506.png" class="small-icon"> Admin
      </button>
    </nav>

    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleMenu()">☰</div>
  </header>

  <!-- MOBILE MENU -->
  <div id="mobileMenu">
    <button onclick="location.href='log_in.php'">Home</button>

    <button onclick="openModal('studentModal')" class="mobile-btn">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="small-icon"> Student
    </button>

    <button onclick="openModal('teacherModal')" class="mobile-btn">
      <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" class="small-icon"> Teacher
    </button>

    <button onclick="openModal('adminModal')" class="mobile-btn">
      <img src="https://cdn-icons-png.flaticon.com/512/1828/1828506.png" class="small-icon"> Admin
    </button>
  </div>


  <!-- MAIN CONTENT -->
  <div class="container">

    <h2 class="title">EXAMINATION SYSTEM</h2>

    <div class="login-boxes">

      <div class="box student" onclick="openModal('studentModal')">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="icon">
        <h3>STUDENT LOGIN</h3>
        <p>Click here to login</p>
      </div>

      <div class="box teacher" onclick="openModal('teacherModal')">
        <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" class="icon">
        <h3>TEACHER LOGIN</h3>
        <p>Click here to login</p>
      </div>

      <div class="box admin" onclick="openModal('adminModal')">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828506.png" class="icon">
        <h3>ADMIN LOGIN</h3>
        <p>Click here to login</p>
      </div>

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
<!-- STUDENT MODAL -->
<div id="studentModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('studentModal')">&times;</span>
    <h2>Student Login</h2>
    <input type="text" id="student_email" placeholder="Student Email / ID">
    <input type="password" id="student_password" placeholder="Password">
    <button onclick="studentLogin()">Login</button>
  </div>
</div>

<!-- TEACHER MODAL -->
<div id="teacherModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('teacherModal')">&times;</span>
    <h2>Teacher Login</h2>
    <input type="text" id="teacher_email" placeholder="Email or ID">
    <input type="password" id="teacher_password" placeholder="Password">
    <button onclick="teacherLogin()">Login</button>
  </div>
</div>

<!-- ADMIN MODAL -->
<div id="adminModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('adminModal')">&times;</span>
    <h2>Admin Login</h2>
    <input type="text" id="admin_email" placeholder="Admin Username">
    <input type="password" id="admin_password" placeholder="Password">
    <button onclick="adminLogin()">Login</button>
  </div>
</div>

<script>
  // Auto update year
  document.getElementById("year").textContent = new Date().getFullYear();

  // Mobile menu toggle
  function toggleMenu() {
    document.getElementById("mobileMenu").classList.toggle("show");
  }

  function openModal(id) {
    document.getElementById(id).style.display = "block";
  }

  function closeModal(id) {
    document.getElementById(id).style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target.classList.contains('modal')) {
      event.target.style.display = "none";
    }
  }
  function studentLogin() {
    let email = $("#student_email").val();
    let pass = $("#student_password").val();

    loginAjax('student', email, pass);
  }

  function teacherLogin() {
    let email = $("#teacher_email").val();
    let pass = $("#teacher_password").val();

    loginAjax('teacher', email, pass);
  }

  function adminLogin() {
    let email = $("#admin_email").val();
    let pass = $("#admin_password").val();

    loginAjax('admin', email, pass);
  }

  // MAIN AJAX FUNCTION (same style as your getlocation)
  function loginAjax(role, email, password) {

    var formData = new FormData();
    formData.append('login', 1);
    formData.append('role', role);
    formData.append('email', email);
    formData.append('password', password);

    $.ajax({
      url: "login-check.php",   // backend file
      data: formData,
      dataType: 'json',
      type: 'POST',
      contentType: false,
      processData: false,
      success: function (r) {
        if (r.success == 1) {
          alert("Login Successful");

          // 
          // window.location.href = "dashboard.php";

        } else {
          alert(r.message);
        }
      }
    });
  }




</script>