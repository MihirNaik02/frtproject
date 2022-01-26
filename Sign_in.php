<?php 
    require("login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">-->
  <link href="css/style.css" rel="stylesheet">
  <title>Sign In</title>
</head>

<body>
  <header class="title-font sm:text-4xl text-3xl mt-20 mb-4 font-medium text-gray-900 text-center">
    Sign Into Your Account
  </header>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class=" bg-gray-100 rounded-lg p-8 flex-col items-center w-full mt-10 mb-12">
        <form method="post">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
        <div class="relative mb-4">
          <label for="Designation" class="leading-7 text-sm text-gray-600">Select Your Hospital</label>
          <select name="fname"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            aria-hidden="true" tabindex="-1">
            <option>Select-from-list</option>
            <?php
              $disp="select *from hospital;";
              $smt=mysqli_query($conn,$disp);
              $resultcheck=mysqli_num_rows($smt);
              if($resultcheck > 0){
                  $i=0; 
                  while($row=mysqli_fetch_assoc($smt)){
              
            ?>
                    <option><?php echo $row['fname']; ?></option>
            <?php
                }
              }
            ?>
          </select>
        </div>
        <div class="relative mb-4">
          <label for="Designation" class="leading-7 text-sm text-gray-600">Sign In As</label>
          <select id="selectsignin" name="usertype"
            class="select w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <option>Select-from-list</option>
            <option>Administrator</option>
            <option>User</option>
          </select>
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600 ">User ID</label>
          <input type="email" id="User ID" name="email" placeholder="Enter Your Email ID"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="pswd" class="leading-7 text-sm text-gray-600">Password</label>
          <input type="password" id="Password" name="pswd" placeholder="Enter Your Password"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button onclick="on_signin()" id="alert" type="submit" name="signin"
          class="w-full text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Sign
          In</button>
        <p id="Message" style="display: none;"></p>
        <p class="text-xs text-gray-500 mt-3 text-center">Don't have Account?
          <a href="Sign_up.php"><strong>Sign Up</strong></a>
        </p>
        </form>
      </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function on_signin() {
      checku();
      checkp();
      if (checku() == true && checkp() == true) {
        document.getElementById("Message").style.display = "block"
        var c=document.getElementById("selectsignin").value
        if(c=="Administrator"){
          // //window.location = "Admin.php";
          }
        else if(c=="User"){
          //window.location="User.php";
        //alert("You have signed in Successfully")
        }
        else{
          alert("Please Select how do you want to Sign In")
        }
      }
      else if (checku() == false) {
        alert("Enter the User Name")
      }
      else {
        alert("Enter The Password")
      }
      function checku() {
        var a = document.getElementById("User ID").value
        if (a == "") {
          return false
        }
        else {
          return true
        }
      }
    }
    function checkp() {
      var b = document.getElementById("Password").value
      if (b == "") {
        return false
      }
      else {
        return true
      }
    }                  
  </script>
</body>

</html>