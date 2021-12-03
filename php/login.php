<?php 
include 'db.php';

$result= array(
    'status'=>100,
    'message'=>'default'
);

if(isset($_POST['username'])|| isset($_POST['password'])){

    $user= $_POST['username'];
    $pwd = $_POST['password'];

    if(!empty($user) && !empty($pwd)){
        
        $sql = "SELECT * FROM `loginusers` WHERE `user_name` = '$user' AND `pwd` = '$pwd'";
        $execute = mysqli_query($conn,$sql);
        if(mysqli_num_rows($execute)){
        $row= mysqli_fetch_array($execute);
        $loginid = $row['user_id'];
        $loginuname = $row['user_name'];
        $loginemail= $row['email'];
        session_start();
        $_SESSION['user_id']= $loginid;
        $_SESSION['user_name']=$loginuname;
        $_SESSION['email']=$loginemail;

         }
        else
        {
            $result['status'] = 101;
            $result['message'] = "Looks like you dont exist in our database";
        }
    }
    else{
        $result['status'] = 101;
        $result['message'] = "Field are empty";
    }

    echo json_encode($result);
    mysqli_close($conn);
    



}






?>