<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <h3 style="margin-left: 10px;">Back</h3>
<div class="pageholder">
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="../images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4>Username</h4>
        <p>--------------</p>
    </div>

    <div style="text-align: center;">
    <h1>Solver</h1>
    <h3>Select Topic</h3>
    </div>

    <Div class = "card">
        <a href="Choose Quiz.php">
        <img src="../images/geometry.jpg"  alt = "geometry" width="250px">
        <div class = "cardInfo">
        <h2>Geometry</h2>
        </div>
        </a>
    </Div>

    <Div class = "card">
        <a href="Choose Quiz.php">
        <img src="../images/Arithmetic.jpg" alt = "Arithmetic" width="250px">
        <div class = "cardInfo">
        <h2>Arithmetic</h2>
        </div>
    </a>
    </Div>

    <Div class = "card">
        <a href="Choose Quiz.php">
        <img src="../images/Circle_Theorem.jpg" alt = "Circle Theorem" width="250px">
        <div class = "cardInfo">
        <h2>Circle Theorem</h2>
        </div>
    </a>
    </Div>

    <div class = "card">
        <a href="Choose Quiz.php">
        <img src="../images/algebra.jpg" alt = "algebra" width="250px">
        <div class = "cardInfo">
        <h2>Algebra</h2>
        </div>
    </a>
    </div>
</div>
    <div class="tchat">

<p>Chat</p>
 <i class="fas fa-comments" id="messagefont"></i>
</div>
 <div class="tchatbox">
    <div class="ttextarea"></div>
    <div class="tinputarea">
        <input type="text"">
        <i class="fas fa-arrow-circle-right" id="sendbutton"></i>
    </div>
 
 </div>
 <?php include '../layout/footer.php'; ?>
</body>
</html>