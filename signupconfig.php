<?php   
        require("alert.php");
        error_reporting(0);
        $fname=$_POST['fname'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $pswd=$_POST['pswd'];
        $designation="Administrator";
        session_start();
      //database connection
      $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
      if($conn->connect_error){
          echo "<h1>Database Connection Failed</h1>";
          die("Failed to connect".$conn->connect_error);
      }else{
          if(($fname!="")&&($address!="")&&($email!="")&&($mobile!="")&&($pswd!="")){
          $sql = "insert into hospital(fname, email, address, mobile, pswd, designation) values(?, ?, ?, ?, ?, ?)";
          $stmt= $conn->prepare($sql);
          $stmt->bind_param('sssiss',$fname, $email, $address, $mobile, $pswd,$designation);
          $result=$stmt->execute();
          $stmt->store_result();
          $sqll = "CREATE TABLE `connect`.`$fname` ( `ID` INT(10) NOT NULL AUTO_INCREMENT,`user` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `designation` VARCHAR(30) NOT NULL , `mobile` BIGINT(30) NOT NULL , `pswd` VARCHAR(30) NOT NULL , `usertype` VARCHAR(30) NOT NULL ,PRIMARY KEY(`ID`), UNIQUE (`email`));";
          $resultt= mysqli_query($conn, $sqll);
          if($result){
            header("location:Sign_in.php");
          }
          //$smt->execute();
          //$smt->store_result();
        // echo "Registration Successful";
        // $stmt->close();
          //$conn->close();
      }

    }
    //$conn=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "freewheelinghmsserver.mysql.database.azure.com", "rooot@freewheelinghmsserver", "Mihir@2002", "connect", 3306);
    ?>
    