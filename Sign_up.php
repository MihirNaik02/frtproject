<?php 
  require("signupconfig.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">-->
  <link href="css/style.css" rel="stylesheet">
  <title>Sign Up</title>
</head>

<body>
  <header class="title-font sm:text-4xl text-3xl mt-20 mb-4 font-medium text-gray-900 text-center">
    Create An Account
  </header>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-5 mx-auto">
      <div class="bg-gray-100 rounded-lg p-8 flex flex-col items-inline block w-full mt-10 mb-12">
        <form action="" method="post" >
        <h2 class="text-gray-900 text-lg font-medium text-center title-font mb-5">Sign Up</h2>
        <div class="relative mb-4">
          <label for="fname" class="leading-7 text-sm text-gray-600">Enter Your Hospital Name</label>
          <input type="text" id="Full Name" name="fname" placeholder="Enter Your Hospital Name"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="address" class="leading-7 text-sm text-gray-600">Enter Your Hospital Address</label>
          <input type="text" id="Full Name" name="address" placeholder="Enter Your Hospital Address"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email ID</label>
          <input type="email" id="Email ID" name="email" placeholder="Enter Your Email ID"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="mobile" class="leading-7 text-sm text-gray-600">Mobile Number</label>
          <input type="tel" id="Mobile Number" name="mobile" placeholder="Enter Your Mobile no"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="pswd" class="leading-7 text-sm text-gray-600"> Create password</label>
          <input type="password" id="Password" name="pswd" placeholder="Enter Your Password"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="Password" class="leading-7 text-sm text-gray-600"> Re-enter password</label>
          <input type="password" id="Re-Password" name="Password" placeholder="Re-enter Your Password"
            class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button onclick="on_signup()" value="Sign Up"
          class=" w-full text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Sign
          Up</button>
        <p class="text-xs text-gray-500 mt-3 text text-center">Already have an Account?
          <a href='Sign_in.php'><strong>Sign In</strong></a>
        </p>
      </div>
      </form>
    </div>
  </section>
  <script>
    function on_signup() {
      var a = document.getElementById("Password").value
      var b = document.getElementById("Re-Password").value
      var c = document.getElementById("Mobile Number").value
      var d = document.getElementById("Email ID").value
      var e = document.getElementById("Full Name").value
      if (e == "") {
        swal({
            title: "Sorry!",
            text: "Please Enter the Hospital Name",
            icon: "error",
            button: "OK",
            });
            
      }
      else if (d == "") {
        swal({
            title: "Sorry!",
            text: "Please Enter the Email ID",
            icon: "error",
            button: "OK",
            });
      }
      else if (c == "") {
        swal({
            title: "Sorry!",
            text: "Please Enter the Mobile Number",
            icon: "error",
            button: "OK",
            });
      }
      else if (c.length != 10 || isNaN(c)) {
        swal({
            title: "Sorry!",
            text: "Please Enter the valid Mobile Number",
            icon: "error",
            button: "OK",
            });
      }
      else if (a != b) {
        swal({
            title: "Sorry!",
            text: "Please check your Password and Re-enter Password",
            icon: "error",
            button: "OK",
            });
      }
      else if (a == "" || b == "") {
        swal({
            title: "Sorry!",
            text: "Please Enter Password",
            icon: "error",
            button: "OK",
            });
      }
      else {
        swal({
            title: "Good Job!",
            text: "You Have Successfully Registered Your Hospital",
            icon: "success",
            button: "OK",
            });
        //window.location = "Sign_in.html"
      }
    }
  </script>
</body>

</html>