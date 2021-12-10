<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">

   <div class="pageholder"> 
   <div class="hello">
    <span><a href="Welcome.php"><i class="far fa-hand-point-left" id="backwbutton"></i></a></span>
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="../images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4><?php echo$_SESSION['user_name'] ?> </h4>
        <p>--------------</p>
    </div>
  
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

<script>
    let btnBack = document.querySelector('span');

    btnBack.addEventListener('click', () =>
    {
        window.history.back();
    });
</script>

    
</body>
</html>