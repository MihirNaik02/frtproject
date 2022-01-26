<?php 
error_reporting(0);
    $user=$_POST['user'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $mobile=$_POST['mobile'];
    $pswd=$_POST['pswd'];
    $usertype="User";

    session_start();
    error_reporting(0);

    //database connection
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
        //echo "Database Connected";
        $sql = "insert into `$_SESSION[hname]`(user, email, designation, mobile, pswd, usertype) values(?, ?, ?, ?, ?, ?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('sssiss',$user, $email, $designation, $mobile, $pswd, $usertype);
        $result=$stmt->execute();
        $stmt->store_result();
        $sqll = "CREATE TABLE `connect`.`$user` ( `ID` INT(10) NOT NULL AUTO_INCREMENT,`patient` VARCHAR(30) NOT NULL , `disease` VARCHAR(30) NOT NULL , `email` VARCHAR(50) , `mobile` BIGINT(30) NOT NULL , `date` VARCHAR(255) NOT NULL, `doctor` VARCHAR(30) NOT NULL , PRIMARY KEY(`ID`), UNIQUE (`email`));";
        $resultt= mysqli_query($conn, $sqll);
        if($result){
        $_SESSION['text']="New User Created";
        $_SESSION['title']="Good Job";
        $_SESSION['icon']="success";
        }
       // echo "Registration Successful";
       // $stmt->close();
        //$conn->close();
    }
?>