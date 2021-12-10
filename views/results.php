<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="../images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4><?php echo$_SESSION['username'] ?></h4>
        <p>--------------</p>
    </div>

    <h1 style="text-align: center;">Results</h1>

    <div class="resultGrid">
        <?php include '../php/result-load.php'; ?>
        <div class="buttondiv">
        <button id = "finishreview"><a href="Welcome.php"> Finish Review </a></button>
</div>
        <?php include '../layout/footer.php'; ?>
    </div>
</body>
</html>