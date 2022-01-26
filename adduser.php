<?php
    require("adduserconfig.php");
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
                <a href="adduser.php" class="active">
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
                <a href="settings.php">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#" onclick="logout()">
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
                <span class="dashboard">Team</span>
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

        <div class="home-content">
            <div class="overview-boxes">
              <div class="box">
                <div class="right-side">
                  <div class="box-topic">Total Cases</div>
                  <div class="number">4440,876</div>
                  <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                  </div>
                </div>
                <i class='bx bxs-user cart'></i>
              </div>
              <div class="box">
                <div class="right-side">
                  <div class="box-topic">Total Recovered</div>
                  <div class="number">4438,876</div>
                  <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                  </div>
                </div>
                <i class='bx bxs-user cart two'></i>
              </div>
              <div class="box">
                <div class="right-side">
                  <div class="box-topic">UnderTreatment</div>
                  <div class="number">12,876</div>
                  <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                  </div>
                </div>
                <i class='bx bxs-user cart three'></i>
              </div>
              <div class="box">
                <div class="right-side">
                  <div class="box-topic">Total Deceased</div>
                  <div class="number">6,086</div>
                  <div class="indicator">
                    <i class='bx bx-down-arrow-alt down'></i>
                    <span class="text">Down From Today</span>
                  </div>
                </div>
                <i class='bx bxs-user cart four'></i>
              </div>
            </div>
        </div>
        <button onclick="openForm()" id="adduser" class="inline-flex text-white bg-purple-500 border-0 py-1 px-4 focus:outline-none hover:bg-purple-600 rounded">Add User</button></br></br>
        <div class="form-popup" id="myForm">
            <form action="adduser.php" method="post" class="form-container">
              <h1 class="header"><b>Add User</b></h1>
          
              <label for="user"><b>User Name</b></label>
              <input type="text" placeholder="Enter User Name" name="user" required>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter User Email" name="email" required>

              <label for="designation"><b>Designation</b></label>
              <input type="text" placeholder="Enter User Designation" name="designation" required>

              <label for="mobile"><b>Mobile Number</b></label>
              <input type="text" placeholder="Enter User Mobile Number" name="mobile" required></br>
          
              <label for="pswd"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pswd" required>
          
              <button type="submit" class="btn" value="Add User" onclick="Submit()">Add User</button>
              <button type="close" class="btn cancel" value="close" onclick="closeForm()">Close</button>
            </form>
        </div>
        <table class="user">
            <thead>
            <tr>
                <th class="data"><b>Sr.No.</b></th>
                <th class="data"><b>User Name</b></th>
                <th class="data"><b>Email ID</b></th>
                <th class="data"><b>Designation</b></th>
                <th class="data"><b>Mobile Number</b></th>
                <th class="data"><b>Password</b></th>
                <th class="data"><b>Operation</b></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $disp="select *from `$_SESSION[hname]`;";
                    $smt=mysqli_query($conn,$disp);
                    $resultcheck=mysqli_num_rows($smt);
                    if($resultcheck > 0){
                        $i=0; 
                        while($row=mysqli_fetch_assoc($smt)){
                ?>
                            <tr>
                                <td class="data"><?php $i++; echo $i;?></td>
                                <td class="data"><?php echo $row['user'] ?></td>
                                <td class="data"><?php echo $row['email'] ?></td>
                                <td class="data"><?php echo $row['designation'] ?></td>
                                <td class="data"><?php echo $row['mobile'] ?></td>
                                <td class="data"><?php echo $row['pswd'] ?></td>
                                <td class="data"><?php echo "<a href='delete.php?rn=$row[ID]'><i class='bx bx-trash'></i></a>" ?></i></td>
                            </tr>
                <?php
                        }
                    }
                ?>
                
            </tbody>
        </table>
        
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
                margin: 0 10px;
                white-space: nowrap;
            }

            nav .profile-details i {
                font-size: 25px;
                color: #333;
            }

            .home-section .home-content {
                position: relative;
                padding-top: 104px;
            }

            .home-content .overview-boxes {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;
                padding: 0 20px;
                margin-bottom: 26px;
            }

            .overview-boxes .box {
                display: flex;
                align-items: center;
                justify-content: center;
                width: calc(100% / 4 - 15px);
                background: #fff;
                padding: 15px 14px;
                border-radius: 12px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }

            .overview-boxes .box-topic {
                font-size: 20px;
                font-weight: 500;
            }

            .home-content .box .number {
                display: inline-block;
                font-size: 35px;
                margin-top: -6px;
                font-weight: 500;
            }

            .home-content .box .indicator {
                display: flex;
                align-items: center;
            }

            .home-content .box .indicator i {
                height: 20px;
                width: 20px;
                background: #8FDACB;
                line-height: 20px;
                text-align: center;
                border-radius: 50%;
                color: #fff;
                font-size: 20px;
                margin-right: 5px;
            }

            .box .indicator i.down {
                background: #e87d88;
            }

            .home-content .box .indicator .text {
                font-size: 12px;
            }

            .home-content .box .cart {
                display: inline-block;
                font-size: 32px;
                height: 50px;
                width: 50px;
                background: #cce5ff;
                line-height: 50px;
                text-align: center;
                color: #66b0ff;
                border-radius: 12px;
                margin: -15px 0 0 6px;
            }

            .home-content .box .cart.two {
                color: #2BD47D;
                background: #C0F2D8;
            }

            .home-content .box .cart.three {
                color: #ffc233;
                background: #ffe8b3;
            }

            .home-content .box .cart.four {
                color: #e05260;
                background: #f7d4d7;
            }

            .home-content .total-order {
                font-size: 20px;
                font-weight: 500;
            }

            .home-content .sales-boxes {
                display: flex;
                justify-content: space-between;
                /* padding: 0 20px; */
            }
            #adduser{
                margin-left: 20px;
                padding-left: 10px;
            }

/* Button used to open the contact form - fixed at the bottom of the page */
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
    bottom: 0px; 
    border: 3px solid #f1f1f1;
    z-index: 9;
}

/* Add styles to the form container */
.form-container {
  height: 550px;  
  max-width: 600px;
  overflow-y: auto;
  padding: 10px;
  justify-content: center;
  position: static;
  background-color: white;
}
.form-container .header{
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

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
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

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.user{
    display: flex;
    flex-wrap: wrap;
    display: block;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 2px solid black;
}
.user thead tr .data{
    padding-left: 20px;
    padding-right: 10px;

}
.user tbody tr .data{
    padding-top: 10px;
    padding-left: 30px;
    padding-right: 15px;
    text-align: center;
}
            /* Responsive Media Query */
              @media (max-width: 1240px) {
                .sidebar {
                    width: 60px;
                }

                .sidebar.active {
                    width: 220px;
                }

                .home-section {
                   width: calc(100% - 60px);
                    left: 60px;
                }

                .sidebar.active~.home-section {
                    /* width: calc(100% - 220px); */
                    overflow: hidden;
                    left: 220px;
                }

                .home-section nav {
                    width: calc(100% - 60px);
                    left: 60px;
                }

                .sidebar.active~.home-section nav {
                    width: calc(100% - 220px);
                    left: 220px;
                }
            }

            @media (max-width: 1150px) {
                .home-content .sales-boxes {
                    flex-direction: column;
                }

                .home-content .sales-boxes .box {
                    width: 100%;
                    overflow-x: scroll;
                    margin-bottom: 30px;
                }

                .home-content .sales-boxes .top-sales {
                    margin: 0;
                }
            }

            @media (max-width: 1000px) {
                .overview-boxes .box {
                    width: calc(100% / 2 - 15px);
                    margin-bottom: 15px;
                }
            }

            @media (max-width: 700px) {

                nav .sidebar-button .dashboard,
                nav .profile-details .admin_name,
                nav .profile-details i {
                    display: none;
                }

                .home-section nav .profile-details {
                    height: 50px;
                    min-width: 40px;
                }

                .home-content .sales-boxes .sales-details {
                    width: 560px;
                }
            }

            @media (max-width: 550px) {
                .overview-boxes .box {
                    width: 100%;
                    margin-bottom: 15px;
                }

                .sidebar.active~.home-section nav .profile-details {
                    display: none;
                }
            }
        </style>
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

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function Submit(){
    //alert("User Added Successfully");
}
        </script>
    </section>
</body>
</html>