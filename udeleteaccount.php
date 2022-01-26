<?php
    $pswd=$_POST['pswd'];
    session_start();
    error_reporting(0);
    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
    if($conn->connect_error){
        echo "<h1>Database Connection Failed</h1>";
        die("Failed to connect".$conn->connect_error);
    }else{
        if(isset($_POST['delete'])){
            $sql="select *from `hospital`;";
            $smt=mysqli_query($conn,$sql);
            $check=mysqli_num_rows($smt);
            if($check > 0){
                while($data=mysqli_fetch_assoc($smt)){
                    $admin=$data['fname'];                                 //demo1,  demo2
                    $sqll="select user,pswd from $admin where user='$_SESSION[uname]'; ";
                    $query=mysqli_query($conn,$sqll);
                    $checkk=mysqli_num_rows($query);
                    if($checkk > 0){
                        while($daata=mysqli_fetch_assoc($query)){
                            $user=$daata['user'];
                            $pass=$daata['pswd'];
                            if($pass==$pswd){
                            $dis="drop table $user;";
                            $smmt=mysqli_query($conn,$dis);
                            $diss="delete from $admin where user='$_SESSION[uname]';";
                            $smmmt=mysqli_query($conn,$diss);
                            header("location:frt.php");
                            }
                        }}
                }
            }
    }
}
?>