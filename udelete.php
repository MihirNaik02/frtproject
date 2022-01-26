<?php
    include("patientsconfig.php");
    error_reporting(0);
    $ID=$_GET['rn'];
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
    $dis="DELETE from `$_SESSION[uname]` where ID='$ID';";
    $smmt=mysqli_query($conn,$dis);
    if($smmt){
        header("location:patients.php");
    //header("location:patients.php");
    }
    else{
        //echo "Data not Deleted";
    }
    }
?>
    