<?php 
include 'db.php';
$result= array(
    'status'=>101,
    'message'=>'default'
);

if(isset($_POST['uname']) || isset($_POST['email']) || isset($_POST['password'])){
    $uname = $_POST['uname'];
    $email =$_POST['email'];
    $pwd = $_POST['password'];
    if(!empty($uname) && !empty($email) && !empty($pwd)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result['status'] = 101;
        $result['message'] = "The email is invalid";
        } else{
            $sql = "SELECT * FROM `loginusers` WHERE `email` = '$email'";
            $repeat = mysqli_query($conn,$sql);
            if(mysqli_num_rows($repeat)>0){
                $result['status'] = 101;
                $result['message'] = "The email is already register";
            }else
            {
                $sql = "SELECT * FROM `loginusers` WHERE `user_name` = '$uname'";
                $repeat = mysqli_query($conn, $sql);
                if(mysqli_num_rows($repeat)>0){
                    $result ['status'] = 101;
                    $result['message'] = "Username Taken";
                }
                else{
                     $sql = "INSERT INTO `loginusers` (`user_name`, `email`, `pwd`) VALUES ('$uname', '$email', '$pwd')";
                    if(mysqli_query($conn, $sql)){
                         $result['status'] = 100;
                         $result['message'] = "Registration Sucessfull! Welcome!";
                         $sql = "SELECT * FROM `loginusers` WHERE `user_name`='$uname' AND `email` = '$email'";
                         $execute = mysqli_query($conn,$sql);
                         $row = mysqli_fetch_array($execute);
                         $loginid = $row['user_id'];
                         $loginuname = $row['user_name'];
                         $loginemail= $row['email'];
                         session_start();
                         $_SESSION['user_id']= $loginid;
                         $_SESSION['user_name']=$loginuname;
                         $_SESSION['email']=$loginemail;
                       

                    }else{
                        $result['status'] = 101;
                        $result['message'] = "Opps, a connection occured with our databases";
                 }

            }


            }




        }

    }else
    {
        $result['status'] = 101;
        $result['message'] = "Fill all field with valid information";
    }

    echo json_encode($result);
    mysqli_close($conn);
}




?>