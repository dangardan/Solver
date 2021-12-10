<?php include'../layout/loginheader.php';?>

<body class = "WelcomeInfo">
 
<div class="pageholder">
<div class = "LevelBar">
    <div class = "userPic">
    <img src="../images/user.png" alt="user image" width = "20px">
    <p>Lvl 1</p>
    </div>
    <h4>Username</h4>
    <p>--------------</p>
</div>

    <div class = "WelcomePage">
        <h1>Solver</h1>
       <button class= "textbox"><a href = "Topic.php"> Quiz </a></button> <br><br>
       <button class = "textbox"> <a href = "history.php">History </a></button> <br><br>
       <button class= "textbox"> <a href = "ranking.php">Leaderboard </a></button> <br><br>
       <button class= "textbox" id="logoutbutton">Log Out</button> <br><br>
     </div>

</div>
     <div class="tchat">

<p>Chat</p>
 <i class="fas fa-comments" id="messagefont"></i>
</div>
 <div class="tchatbox">
    <div class="ttextarea">
    <div class= "design"> <p> ${message} </p></div>
    </div>
    <div class="tinputarea">
        <input class="textmessage" type="text">
        <i class="fas fa-arrow-circle-right" id="sendbutton"></i>
    </div>
 
 </div>
     <!-- <button id = "chatBox">Chat</button> -->
   
     <?php include '../layout/footer.php'; ?>

    
    </body>
</html>