<?php
include 'db.php';

$sql = "SELECT * FROM `ranking` ORDER BY `experience` DESC LIMIT 10";
$counter = 1;
$result= mysqli_query($conn,$sql);
echo"<tr>
<th>Rank</th>
<th>Name</th>
<th>Experience</th>
</tr>";
if(mysqli_num_rows($result))
    {
        while($row = mysqli_fetch_assoc($result))

        {   $id = $row['userid'];
            $finalname = 'okay';
            if($id != null){
            $name =  "SELECT * FROM `loginusers` WHERE `user_id` = '$id'";
            $r = mysqli_query($conn,$name);
            $r = mysqli_fetch_array($r);
            $finalname = $r['user_name']; }
           
            echo "<tr>";
            echo "<td>";
            echo $counter;
            echo "</td>";
            echo "<td>";
            echo $finalname;
            echo "</td>";
            echo "<td>";
            echo $row['experience'];
            echo" Exp";
            echo "</td>";
            echo "</tr>";
            $counter++;
        }
    }else{
        echo "there is no rank";
    }

mysqli_close($conn);

?>