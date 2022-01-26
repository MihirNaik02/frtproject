<?php 
    error_reporting(0);
    $email=$_POST['email'];
    $opswd=$_POST['opswd'];
    $npswd=$_POST['npswd'];
    $cnpswd=$_POST['cnpswd'];

    session_start();
    error_reporting(0);
    

    //database connection
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
        //echo "Database Connected";
        if(isset($_POST['change'])){
        $sqll=mysqli_query($conn,"select email,pswd from `$_SESSION[hname]` where email='$email' and pswd='$opswd'");
        $num=mysqli_fetch_array($sqll);
        if($num>0){
        $sql = "update `$_SESSION[hname]` set pswd='$npswd' where email='$email'";
        $quert_run= mysqli_query($conn,$sql);
        if($quert_run){
            $_SESSION['text']="Password Changed Successfully";
            $_SESSION['title']="Good Job";
            $_SESSION['icon']="success";
        }
        }
        }
    }
?>