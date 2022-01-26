<?php
    $pswd=$_POST['pswd'];
    error_reporting(0);
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
        if(isset($_POST['delete'])){
            $dis="select *from `hospital` where fname='$_SESSION[hname]';";
            $smmmt=mysqli_query($conn,$dis);
            $checkk=mysqli_num_rows($smmmt);
            if($checkk > 0){
                while($daata=mysqli_fetch_assoc($smmmt)){
                    $pass=$daata['pswd'];
                    $admin=$daata['fname'];
                    $email=$daata['email'];
                    //echo $admin;
                        $sql="select *from `$admin`;";
                        $query=mysqli_query($conn,$sql);
                        $check=mysqli_num_rows($query);
                        if($check > 0){
                            while($data=mysqli_fetch_assoc($query)){
                                $user=$data['user'];
                                if($pass==$pswd){
                                    //$userr=strtolower($user);
                                $sqll="drop table `$user`;";
                                $smt=mysqli_query($conn,$sqll);
                                }
                                }
                            }
                                if($pass==$pswd){
                                $disp="drop table `$admin`;";
                                $smmt=mysqli_query($conn,$disp);
                                $dispp="delete from hospital where email='$email';";
                                $st=mysqli_query($conn,$dispp);
                                header("location:frt.php");
                }
            
        
        }
        }
    }
}
?>