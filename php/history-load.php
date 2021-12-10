<?php
include 'db.php';
// session_start();
$ID=$_SESSION['user_id'];
$sql="SELECT * FROM `taknquiz` WHERE user_id='$ID'";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result))
    {
        while($row = mysqli_fetch_assoc($result))

        {   
        echo "<tr>";
        echo "<td>".$row['quizID']."</td>";
        echo "<td></td>";
        echo "<td>".$row['grade']."%"."</td>";
        echo "<td>".$row['datetaken']."</td>";
        echo "<td><a href='../views/results.php?id=".$row['quizID']."'>view</a></td>";
        echo "</tr>";
        }
    }
?>