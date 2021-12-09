<?php
include 'db.php';
session_start();
if(isset($_GET['id'])){
    //do something if $_GET is set
    $_SESSION['last_id']=$_GET['id'];
    $_GET['id']=null;
    } 
if(!empty($_SESSION['last_id'])){
    $ID=$_SESSION['last_id'];
    $sql = "SELECT * FROM `taknquiz` WHERE `quizID` = '$ID'";
    $result= mysqli_query($conn,$sql);
$counter=1;
if(mysqli_num_rows($result))
    {
        while($row = mysqli_fetch_assoc($result))

        {   
            while($counter<=3){
                $qsql="SELECT * FROM `question` WHERE qID='$counter'";
                $r = mysqli_query($conn,$qsql);
                $res= mysqli_fetch_assoc($r);
                $question=$res['question'];
                $explanation=$res['solution'];
                $correct=$res['ans'];
                $choice= explode(',',$res['badchoice']);
                $choice[]=$correct;
                echo "<div class='resultQuestions'>";
                
                if($counter==1){
                    $id = $row['quizID'];
                    $ans = $row['mc'];
                    $userchoice= explode(':',$ans);
                    echo "<h3>Question 1</h3>";
                    echo "<p>" . $question ."<p>";
                    shuffle($choice);
                    foreach ($choice as $value) {
                        if($correct==$value && $userchoice[0]=="correct"){
                            echo "<button style='border: 5px Solid rgb(45, 245, 45);' id='corect' value='".$id.":".$value."' name='mc'>" . $value . "</button>";
                        }elseif($userchoice[1]==$value && $userchoice=="wrong"){
                            echo "<button style='border: 3px Solid red;' id='wrong' value='".$id.":".$value."' name='mc'>" . $value . "</button>";
                        }else{
                            echo "<button id='mc' value='".$id.":".$value."' name='mc'>" . $value . "</button>";
                        }
                    }
                    echo " <div class = 'resultExplanation'>";
                    echo "<p><b>Explanation</b></p>";
                    echo "<p>".$explanation."</p>";
                    echo "</div>";
                    echo "<div class = 'resultLink'>
                    <p>Try link to further understand</p>
                    <button style='background-color: rgb(56, 255, 56);'>Link</button>
                </div>";
                    $counter++;
                }
                elseif($counter==2){
                    $id = $row['quizID'];
                    $ans = $row['sa'];
                    $userchoice= explode(':',$ans);
                    echo "<h3>Question 2</h3>";
                    echo "<p>" . $question ."<p>";
                    if($userchoice[0]=="correct"){
                        echo "<span style='border: 3px solid rgb(64, 250, 64);'><input type='text' value=".$userchoice[1]."></span>";
                    }else{
                        echo "<span style='border: 3px solid red;'><input type='text' value=".$userchoice[1]."></span>";
                    }
                    echo " <div class = 'resultExplanation'>";
                    echo "<p><b>Explanation</b></p>";
                    echo "<p>".$explanation."</p>";
                    echo "</div>";
                    echo "<div class = 'resultLink'>
                    <p>Try link to further understand</p>
                    <button style='background-color: rgb(56, 255, 56);'>Link</button>
                    </div>";                   
                   $counter++;
    
                }
                elseif($counter==3){
    
                    $counter++;
                    $id = $row['quizID'];
                    $ans = $row['tf'];
                    $userchoice= explode(':',$ans);
                    echo "<h3>Question 3</h3>";
                    echo "<p>" . $question . " ".$userchoice[1]."<p>";
                    if($userchoice[0]=="correct" && $userchoice[2]=="true"){
                        echo "<button  id='correct' style='border: 5px Solid rgb(45, 245, 45);' name='trfl' value='".$id.":"."true:".$choice[0]."'>True</button>";
                        echo "<button id='trfl' name='trfl' value='".$id.":"."false:".$choice[0]."'>False</button>";
                    }elseif($userchoice[0]=="correct" && $userchoice[2]=="false"){
                        echo "<button    name='trfl' value='".$id.":"."true:".$choice[0]."'>True</button>";
                        echo "<button id='correct' style='border: 5px Solid rgb(45, 245, 45);' name='trfl' value='".$id.":"."false:".$choice[0]."'>False</button>";
                    }elseif($userchoice[0]=="wrong" && $userchoice[2]=="false"){
                        echo "<button id='correct' style='border: 5px Solid rgb(45, 245, 45);' name='trfl' value='".$id.":"."true:".$choice[0]."'>True</button>";
                        echo "<button id='wrong' style='border: 3px solid red;' name='trfl' value='".$id.":"."false:".$choice[0]."'>False</button>";
                    }elseif($userchoice[0]=="wrong" && $userchoice[2]=="true"){
                        echo "<button id='wrong' style='border: 3px solid red;' name='trfl' value='".$id.":"."true:".$choice[0]."'>True</button>";
                        echo "<button id='correct' style='border: 5px Solid rgb(45, 245, 45);' name='trfl' value='".$id.":"."false:".$choice[0]."'>False</button>";
                    }
                    echo " <div class = 'resultExplanation'>";
                    echo "<p><b>Explanation</b></p>";
                    echo "<p>".$explanation."</p>";
                    echo "</div>";
                    echo "<div class = 'resultLink'>
                    <p>Try link to further understand</p>
                    <button style='background-color: rgb(56, 255, 56);'>Link</button>
                </div>";
                   
                }
                echo "</div>";
            }
           
        }
    }else{
        echo "there is no comments";
    }
}
?>