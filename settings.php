<?php
  include("changepass.php");
  include("deleteaccount.php");
  require("alert.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-user'></i>
            <span class="logo_name">Admin</span>
        </div>
        <b class="nav-links">
            <li>
                <a href="Admin.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="profile.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="analytics.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
            </li>
            <li>
                <a href="stock.php">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
            <li>
                <a href="adduser.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Team</span>
                </a>
            </li>
            <li>
                <a href="messages.php">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="settings.php" class="active">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#"  onclick="logout()">
                    <i class='bx bx-log-out'></i>
                    <span id="logout" class="links_name">Log out</span>
                </a>
            </li>
        </b>
    </div>
  <section class="home-section">
        <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Settings</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search'></i>
        </div>
        <div class="profile-details">
            <!--<img src="images/profile.jpg" alt="">-->
            <span class="admin_name"><?php
                    session_start();
                    error_reporting(0);
                    echo $_SESSION['hname']?></span>
        </div>
        </nav>
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center mt-20">Admin Settings</h1>
            <div class="flex flex-wrap m-10">
              <a href="#" onclick="openForm()" id="adduser">
              <div class="p-4 md:w-1/3 w-full bg-gray-300 mt-24 ml-24 mr-24">
                <div class="h-full bg-gray-100 p-8 rounded">
                  <p class="text-xl leading-relaxed mb-6 font-semibold text-center mt-10">Change Password</p>
                  <a class="inline-flex items-center"></a>
                </div>
              </div>
              </a>
              <div class="form-popup" id="myForm">
                  <form action="settings.php" method="post" class="form-container">
                    <h1 class="header"><b>Change Password</b></h1>
                
                    <label for="email"><b>Enter Your Email Id</b></label>
                    <input type="text" placeholder="Enter Email ID" name="email" required>

                    <label for="opswd"><b>Enter Your Old Password</b></label>
                    <input type="password" placeholder="Enter Old Password" name="opswd" required>

                    <label for="npswd"><b>Enter Your New Password</b></label>
                    <input type="password" placeholder="Enter New Password" name="npswd" required>

                    <label for="cnpswd"><b>Confirm Your New Password</b></label>
                    <input type="password" placeholder="Confirm New Password" name="cnpswd" required>
                
                    <button type="submit" name="change" class="btn" value="Add User" onclick="Submit()">Change Password</button>
                    <button type="close" class="btn cancel" value="close" onclick="closeForm()">Close</button>
                  </form>
              </div>
              <a href="#" onclick="openForm1()" id="adduser">
              <div class="p-4 md:w-1/3 w-full bg-gray-300 mt-24 ml-24">
                <div class="h-full bg-gray-100 p-8 rounded">
                  <p class="text-xl leading-relaxed mb-6 font-semibold text-center mt-10">Delete My Account</p>
                  <a class="inline-flex items-center">
                  </a>
                </div>
              </div>
              </a>
              <div class="form-popup1" id="myForm1">
                  <form action="settings.php" method="post" class="form-container1">
                    <h1 class="header"><b>Delete Account</b></h1>
                
                    <label for="pswd"><b>Enter Your Password</b></label>
                    <input type="password" placeholder="Confirm Password to Delete Your Account" name="pswd" required>
                
                    <button type="submit" name="delete" class="btn" value="Add User" onclick="Submit()">Delete Account</button>
                    <button type="close" class="btn cancel" value="close" onclick="closeForm1()">Close</button>
                  </form>
              </div>
            </div>
          </div>
        </section>
        <style>
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .sidebar {
      position: fixed;
      height: 100%;
      width: 240px;
      --tw-bg-opacity: 1;
      background: rgba(139, 92, 246, var(--tw-bg-opacity));
      ;
      transition: all 0.5s ease;
    }

    .sidebar.active {
      width: 60px;
    }

    .sidebar .logo-details {
      height: 80px;
      display: flex;
      align-items: center;
    }

    .sidebar .logo-details i {
      font-size: 28px;
      font-weight: 500;
      color: #fff;
      min-width: 60px;
      text-align: center
    }

    .sidebar .logo-details .logo_name {
      color: #fff;
      font-size: 24px;
      font-weight: 500;
    }

    .sidebar .nav-links {
      margin-top: 10px;
    }

    .sidebar .nav-links li {
      position: relative;
      list-style: none;
      height: 50px;
    }

    .sidebar .nav-links li a {
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
    }

    .sidebar .nav-links li a.active {
      background: rgb(113, 56, 247);
    }

    .sidebar .nav-links li a:hover {
      background: rgb(113, 56, 247);
    }

    .sidebar .nav-links li i {
      min-width: 60px;
      text-align: center;
      font-size: 18px;
      color: #fff;
    }

    .sidebar .nav-links li a .links_name {
      color: #fff;
      font-size: 15px;
      font-weight: 400;
      white-space: nowrap;
    }

    .sidebar .nav-links .log_out {
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .home-section {
      position: relative;
      background: #f5f5f5;
      min-height: 100vh;
      width: calc(100% - 240px);
      left: 240px;
      transition: all 0.5s ease;
    }

    .sidebar.active~.home-section {
      width: calc(100% - 60px);
      left: 60px;
    }

    .home-section nav {
      display: flex;
      justify-content: space-between;
      height: 80px;
      background: #fff;
      display: flex;
      align-items: center;
      position: fixed;
      width: calc(100% - 240px);
      left: 240px;
      z-index: 100;
      padding: 0 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
      transition: all 0.5s ease;
    }

    .sidebar.active~.home-section nav {
      left: 60px;
      width: calc(100% - 60px);
    }

    .home-section nav .sidebar-button {
      display: flex;
      align-items: center;
      font-size: 24px;
      font-weight: 500;
    }

    nav .sidebar-button i {
      font-size: 35px;
      margin-right: 10px;
    }

    .home-section nav .search-box {
      position: relative;
      height: 50px;
      max-width: 550px;
      width: 100%;
      margin: 0 20px;
    }

    nav .search-box input {
      height: 100%;
      width: 100%;
      outline: none;
      background: #F5F6FA;
      border: 2px solid #EFEEF1;
      border-radius: 6px;
      font-size: 18px;
      padding: 0 15px;
    }

    nav .search-box .bx-search {
      position: absolute;
      height: 40px;
      width: 40px;
      background: #2697FF;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      border-radius: 4px;
      line-height: 40px;
      text-align: center;
      color: #fff;
      font-size: 22px;
      transition: all 0.4 ease;
    }

    .home-section nav .profile-details {
      display: flex;
      align-items: center;
      background: #F5F6FA;
      border: 2px solid #EFEEF1;
      border-radius: 6px;
      height: 50px;
      min-width: 190px;
      padding: 0 15px 0 2px;
    }

    nav .profile-details img {
      height: 40px;
      width: 40px;
      border-radius: 6px;
      object-fit: cover;
    }

    nav .profile-details .admin_name {
      font-size: 15px;
      font-weight: 500;
      color: #333;
      margin: 0 40px;
      white-space: nowrap;
    }

    nav .profile-details i {
      font-size: 25px;
      color: #333;
    }
    .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
    display: none; 
    position: fixed; 
    right: 300px; 
    bottom: 20px; 
    border: 3px solid #f1f1f1;
    z-index: 9;
}
.form-popup1 {
    display: none; 
    position: fixed; 
    right: 300px; 
    bottom: 20px; 
    border: 3px solid #f1f1f1;
    z-index: 9;
}

/* Add styles to the form container */
.form-container {
  position: static;  
  height: 530px;  
  max-width: 600px;
  overflow-y: auto;
  padding: 10px;
  justify-content: center;
  background-color: white;
  bottom: 30px;
}
.form-container1 {
  position:fixed;  
  height: 220px;  
  max-width: 600px;
  padding: 10px;
  right: 270px;
  align-items: center;
  justify-content: center;
  background-color: white;
  bottom: 270px;
  overflow: hidden;
}
.form-container .header{
    text-align: center;
}
.form-container1 .header{
    text-align: center;
}
/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  border-radius: 10px;
  background: #f1f1f1;
}
.form-container1 input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  border-radius: 10px;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.form-container1 input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit/login button */
.form-container .btn {
  background-color: rgb(113, 56, 247);
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 45%;
  margin-bottom:10px;
  opacity: 0.8;
  margin-right: 20px;
}
.form-container1 .btn {
  background-color: rgb(113, 56, 247);
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 45%;
  margin-bottom:10px;
  opacity: 0.8;
  margin-right: 20px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: rgb(113, 56, 247);
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 45%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container1 .cancel {
  background-color: rgb(113, 56, 247);
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 45%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.form-container1 .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</section>
<script>
    function logout() {
                  swal({
                    title: "Are you sure?",
                    text: "You want to Logout",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("Logout Sucessfull", {
                        icon: "success",
                    });
                        window.location = "frt.php";
                        
                    } else {
                    }
                    });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
  </script>
</body>
</html>