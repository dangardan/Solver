<?php include'../layout/loginheader.php';?>

<body class = "WelcomeInfo">
 
<div class="pageholder">
<div class = "LevelBar">
    <div class = "userPic">
    <img src="../images/user.png" alt="user image" width = "20px">
    <p>Lvl 1</p>
    </div>
    <h4><?php echo$_SESSION['user_name'] ?></h4>
    <p>--------------</p>
</div>

    <div class = "WelcomePage">
        <h1>Solver</h1>
       <button class= "textbox" id="quizbutton"><i class="fas fa-book-open"></i> Quiz </button> <br><br>
       <button class = "textbox" id="historybutton"><i class="fas fa-history"></i> History </button> <br><br>
       <button class= "textbox" id="leaderboardbutton"> <i class="fas fa-medal"></i> Leaderboard </button> <br><br> <br> <br> <br>
       <button class= "textbox" id="logoutbutton"><i class="fas fa-sign-out-alt"></i>Log Out</button> <br><br>
     </div>

</div>
     <div class="tchat">

<p>Chat</p>
 <i class="fas fa-comments" id="messagefont"></i>
</div>
 <div class="tchatbox">
    <div class="ttextarea">
    
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