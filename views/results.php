<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="./images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4>Username</h4>
        <p>--------------</p>
    </div>

    <h1 style="text-align: center;">Results</h1>

    <div class="resultGrid">
        <?php include '../php/result-load.php'; ?>
        <button id = "finishButton"><a href="Welcome.html"> Finish Quiz </a></button>
        <?php include '../layout/footer.php'; ?>
    </div>
</body>
</html>