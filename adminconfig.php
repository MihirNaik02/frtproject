<?php
    error_reporting(0);
    //include("login.php");
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $usertype=$_POST['usertype'];

    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
      if($conn->connect_error){
          echo "<h1>Database Connection Failed</h1>";
          die("Failed to connect".$conn->connect_error);
      }else{
      }
?>