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
        <h4><?php echo$_SESSION['user_name'] ?></h4>
        <p>--------------</p>
    </div>
  
    </div>
    <div style="text-align: center;">
    <h1 id="Heading">Select Topic</h1>
    
    </div>

    <div class="solverCards">
        <div class = "card">
            
            <img src="../images/geometry.jpg"  alt = "geometry" width="250px">
            <div class = "cardInfo">
            <h2>Geometry</h2>
            </div>
            
        </div>

        <div class = "card">
         
            <img src="../images/Arithmetic.jpg" alt = "Arithmetic" width="250px">
            <div class = "cardInfo">
            <h2>Arithmetic</h2>
            </div>
       
        </div>

        <div class = "card">
        
            <img src="../images/Circle_Theorem.jpg" alt = "Circle Theorem" width="250px">
            <div class = "cardInfo">
            <h2>Circle Theorem</h2>
            </div>
     
        </div>

        <iv class = "card">
           
            <img src="../images/algebra.jpg" alt = "algebra" width="250px">
            <div class = "cardInfo">
            <h2>Algebra</h2>
            </div>
       
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