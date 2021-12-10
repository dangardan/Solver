<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">


<div class="hello">
    <span><a href="Topic.php"><i class="far fa-hand-point-left" id="backwbutton"></i></a></span>
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="../images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4><?php echo$_SESSION['user_name'] ?></h4>
        <p>--------------</p>
    </div>
  
    </div>

    <div class = "SolverTable">
        <h1 id="heading2">Choose Quiz</h1>
        <table>
            <tr>
                <a href="Quiz.php">
                <th>Number</th>
                <th>Name</th>
                <th>No. of Questions</th>
                <th>Time</th>
                </a>
            </tr>
            <tr>
                <a href="Quiz.php">
                <td>1</td>
                <td>Geometry</td>
                <td>4</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.php">Select</a></button></td>

            </a>

            </tr>
            <tr>
                <td>2</td>
                <td>Algebra</td>
                <td>3</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.php">Select</a></button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cirlce Theorem</td>
                <td>3</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.php">Select</a></button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Arithmetic</td>
                <td>3</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.php">Select</a></button></td>
            </tr>
        </table>
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
    <?php include '../layout/footer.php'; ?>
</body>
</html>