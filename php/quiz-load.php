<?php
include 'db.php';
$sql= "SELECT * FROM `question` WHERE topic='algebra'";
$result= mysqli_query($conn,$sql);
$counter=1;
if(mysqli_num_rows($result))
    {
        while($row = mysqli_fetch_assoc($result))

        {   
            echo "<div class='QuizQuestions'>";
            
            if($counter==1){
                $id = $row['qID'];
                $question = $row['question'];
                $ans= $row['ans'];
                $wrong= $row['badchoice'];
                $choice= explode(',',$wrong);
                $choice[]=$ans;
                echo "<h3>Question 1</h3>";
                echo "<p>" . $question ."<p>";
                shuffle($choice);
                foreach ($choice as $value) {
                    echo "<input type='radio' id='mc' value='".$id.":".$value."' name='mc'>" . $value . "</input>";

                }
                $counter++;
            }
            elseif($counter==2){
                $id = $row['qID'];
                $question = $row['question'];
                $_SESSION['sa']=$id;
                echo "<h3>Question 2</h3>";
                echo "<p>" . $question ."<p>";
                echo "<input id='" .$id. "' name='fill' type='text'>";
               $counter++;

            }
            elseif($counter==3){

                $counter++;
                $id = $row['qID'];
                $question = $row['question'];
                $ans= $row['ans'];
                $wrong= $row['badchoice'];
                $choice= explode(',',$wrong);
                shuffle($choice);
                array_pop($choice);
                array_pop($choice);
                $choice[]=$ans;
                shuffle($choice);
                array_pop($choice);
                echo "<h3>Question 3</h3>";
                echo "<p>" . $question . $choice[0]."<p>";
                echo "<input type='radio' id='trfl'  name='trfl' value='".$id.":"."true:".$choice[0]."'>True</input>";
                echo "<input type='radio' id='trfl' name='trfl' value='".$id.":"."false:".$choice[0]."'>False</input>";
            }
            echo "</div>";
        }
    }else{
        echo "there is no comments";
    }



?>
