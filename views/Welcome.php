<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
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
       <button class= "textbox"><a href = "Topic.html"> Quiz </a></button> <br><br>
       <button class = "textbox"> <a href = "history.html">History </a></button> <br><br>
       <button class= "textbox"> <a href = "ranking.html">Leaderboard </a></button> <br><br>
       <button class= "textbox" id="logoutbutton">Log Out</button> <br><br>
     </div>

     <button id = "chatBox">Chat</button>
     <?php include '../layout/footer.php'; ?>
</body>
</html>