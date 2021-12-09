<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <h3>Back</h3>
    
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="../images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4>Username</h4>
        <p>--------------</p>
    </div>

    <div class = "SolverTable">
    <h1>History</h1>
    <table>
        <tr>
            <th>INDEX</th>
            <th>TOPIC</th>
            <th>GRADE</th>
            <th>DATE</th>
            <th>REVIEW</th>

        </tr>
        <?php include '../php/history-load.php'; ?>
    </table>
</div>

<button id = "chatBox">Chat</button>
<?php include '../layout/footer.php'; ?>

    
</body>
</html>