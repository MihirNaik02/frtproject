<?php
    include("adduserconfig.php");
    error_reporting(0);
    $ID=$_GET['rn'];
    $conn= new mysqli('localhost:3308','root','','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
    $diss="select *from `$_SESSION[hname]` where ID='$ID';";
    $smmmt=mysqli_query($conn,$diss);
    $resultcheck=mysqli_num_rows($smmmt);
        if($resultcheck > 0){ 
            while($row=mysqli_fetch_assoc($smmmt)){
                $table="$row[user]";
            }}
    //echo $smmmt;
    $disss="DROP TABLE `$table`";
    $smmmmt=mysqli_query($conn,$disss);
    $dis="DELETE from `$_SESSION[hname]` where ID='$ID';";
    $smmt=mysqli_query($conn,$dis);
    if($smmt && $smmmt){
        header("location:adduser.php");
    //header("location:patients.php");
    }
    else{
        //echo "Data not Deleted";
    }
    }
?>