<?php
include 'db.php';
session_start();
$results= array(
    'status'=>100,
    'message'=>'default'
);
if(isset($_POST['mchoice']) || isset($_POST['tfchoice']) || isset($_POST['blank'])){
    $mc = explode(":",$_POST['mchoice']);
    $tf =explode(":",$_POST['tfchoice']);
    $saID=$_SESSION['sa'];
    $fill = $_POST['blank'];
    $grade=0;
    if(!empty($mc) && !empty($tf) && !empty($fill)){
        $id=$_SESSION['user_id'];
        $sql="SELECT ans FROM `question` WHERE qID='$mc[0]'";
        $result=mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $ans=$row['ans'];
        };
        
        if($ans==$mc[1]){
            $mcresult="correct:".$ans;
            $grade=$grade + 40;
        }else{
            $mcresult="wrong:".$mc[1];
        }

        $sql="SELECT ans FROM `question` WHERE qID='$saID'";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $ans=$row['ans'];
        if($ans==$fill){
            $saresult="correct:".$ans;
            $grade=$grade + 40;
        }else{
            $saresult="wrong:".$fill;
        }

        $sql="SELECT ans FROM `question` WHERE qID='$tf[0]'";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $ans=$row['ans'];
        if($ans==$tf[2] && $tf[1]=="true"){
            $tfresult="correct:".$ans.":true";
            $grade=$grade + 20;
        }elseif($tf[2]!=$ans && $tf[1]=="false"){
            $tfresult="correct:".$ans.":false";
            $grade=$grade + 20;
        }else{
            $tfresult="wrong:".$ans.":".$tf[1];
        }
      
        $mainsql="INSERT INTO `taknquiz` (`user_id`, `mc`, `sa`, `tf`,`grade`) VALUES ('$id', '$mcresult', '$saresult', '$tfresult','$grade')";
        if (mysqli_query($conn, $mainsql)) {
            $_SESSION['last_id'] = mysqli_insert_id($conn);
            $results['status'] = 100;
            $results['message'] = "Results saved Sucessfull! Welcome!";
          } else {
            $results['status'] = 101;
            $results['message'] = "Opps, a connection occured with our databases";
          }
    }
    


   echo json_encode($results);
   mysqli_close($conn);

}
?>