<?php 
    require("alert.php");
    error_reporting(0);
    $user=$_POST['user'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $mobile=$_POST['mobile'];

    session_start();
    error_reporting(0);
    

    //database connection
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
        //echo "Database Connected";
        if(isset($_POST['update'])){
        //sqll=mysqli_query($conn,"select email from `$_SESSION[hname]` where email=")
        $sql = "update `$_SESSION[hname]` set user='$user', designation='$designation', mobile='$mobile' where email='$email'";
        $quert_run= mysqli_query($conn,$sql);
        if(($query_run)==true){
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>swal({
                    title: "Good Job!",
                    text: "Profile Updated Successfully",
                    icon: "success",
                    button: "OK",
                    });</script>
            <?php
            header('refresh:1;url=profile.php');
            exit;
        }
        if(($query_run)==false){
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>swal({
                    title: "Sorry!",
                    text: "Please Enter Correct Details",
                    icon: "error",
                    button: "OK",
                    });</script>
            <?php
        }
        }
    }
?>