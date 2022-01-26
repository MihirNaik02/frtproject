 <?php
    include("alert.php");
    error_reporting(0);
    //include("Sign_in.php");
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $usertype=$_POST['usertype'];
    session_start();
    $_SESSION['hname'] = "$fname";
    $_SESSION['hemail'] = "$email";
    $_SESSION['husertype'] = "$usertype";

    $conn= new mysqli('freewheelinghmsserver.mysql.database.azure.com','rooot@freewheelinghmsserver','Mihir@2002','connect');
      if($conn->connect_error){
          echo "<h1>Database Connection Failed</h1>";
          die("Failed to connect".$conn->connect_error);
      }else{
          if(isset($_POST['signin'])){
          if($usertype==="Administrator"){
                $stmt=$conn->prepare("select * from hospital where email=?");
                $stmt->bind_param("s", $email);
                $result=$stmt->execute();
                $stmt_result=$stmt->get_result();
                if($stmt_result->num_rows > 0){
                    $data=$stmt_result->fetch_assoc();
                    $_SESSION['hmobile']="$data[mobile]";;
                    if($data['pswd'] === $pswd){
                        if($data['designation'] === $usertype){
                            if($data['fname']===$fname){ 
                                ?>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                <script>swal({
                                        title: "Good Job!",
                                        text: "Sign In Successfull",
                                        icon: "success",
                                        button: "OK",
                                        });</script>
                                <?php
                               header('refresh:4;url=Admin.php');
                               exit;
                            }
                            else{
                                session_start();?>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                <script>swal({
                                        title: "Sorry!",
                                        text: "Please Enter Correct Details",
                                        icon: "error",
                                        button: "OK",
                                        });</script>
                                <?php
                                //echo "<h1>Please Enter correct Detailssssssss</h1>";
                            }
                        }else{
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
                    }else{
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
                }else{
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
            else if($usertype==="User"){
                $stmt=$conn->prepare("select * from `$_SESSION[hname]` where email=?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt_result=$stmt->get_result();
                if($stmt_result->num_rows > 0){
                $data=$stmt_result->fetch_assoc();
                session_start();
                $_SESSION['uname']="$data[user]";
                $_SESSION['uemail']="$data[email]";
                $_SESSION['udesignation']="$data[designation]";
                $_SESSION['umobile']="$data[mobile]";
                if($data['pswd'] === $pswd){
                    ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script>swal({
                            title: "Good Job!",
                            text: "Sign In Successfull",
                            icon: "success",
                            button: "OK",
                            });</script>
                    <?php
                   header('refresh:4;url=User.php');
                   exit;
                }else{
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
    }
    }
?>