<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
<div class="hello">
    <span><a href="Welcome.php"><i class="far fa-hand-point-left" id="backwbutton"></i></a></span>
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
    <h1>Ranking</h1>
    <table id="rankingtable">
    <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Experience</th>
        </tr>
    </table>
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

<?php include '../layout/footer.php'; ?>

<script>
    let btnBack = document.querySelector('span');

    btnBack.addEventListener('click', () =>
    {
        window.history.back();
    });
</script>
</body>
</html>