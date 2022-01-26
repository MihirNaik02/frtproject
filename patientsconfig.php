<?php 
error_reporting(0);
    $patient=$_POST['patient'];
    $disease=$_POST['disease'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $date=date('Y-m-d',strtotime($_POST['date']));

    session_start();
    error_reporting(0);
    //$doctor="$_SESSION[uname]";

    //database connection
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
        //echo "Database Connected";
        $sql = "insert into `$_SESSION[uname]`(patient, disease, email, mobile, date, doctor) values(?, ?, ?, ?, ?, ?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('sssiss',$patient, $disease, $email, $mobile, $date, $_SESSION['uname']);
        $result=$stmt->execute();
        $stmt->store_result();
        if($result){
            $_SESSION['text']="New Patient Added";
            $_SESSION['title']="Good Job";
            $_SESSION['icon']="success";
        }
       // echo "Registration Successful";
       // $stmt->close();
        //$conn->close();
    }
?>