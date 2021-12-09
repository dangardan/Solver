<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <h3 style="margin-left: 10px;">Back</h3>

    <div class = "LevelBar">
        <div class = "userPic">
        <img src="./images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4>Username</h4>
        <p>--------------</p>
    </div>

    <div class = "SolverTable">
        <h1>Choose Quiz</h1>
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
    <?php include '../layout/footer.php'; ?>
</body>
</html>