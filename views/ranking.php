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

    <div class = "SolverTable">
    <h1>Ranking</h1>
    <table id="rankingtable">
    <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Experience</th>
        </tr>
   
        <!-- <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr> -->
    </table>
</div>
</div>
<div class="tchat">

<p>Chat</p>
 <i class="fas fa-comments" id="messagefont"></i>
</div>
 <div class="tchatbox">
    <div class="ttextarea"></div>
    <div class="tinputarea">
        <input type="text">
        <i class="fas fa-arrow-circle-right" id="sendbutton"></i>
    </div>
 
 </div>
<?php include '../layout/footer.php'; ?>
</body>
</html>