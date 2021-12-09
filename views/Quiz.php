<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <h1 style="text-align: center;">Quiz Name</h1>


    <div class="QuizBackground">
        <p class = "Quiztime">1:30:42</p>
        <?php include '../php/quiz-load.php'; ?>
        <button id = "finishButton"> Finish Quiz </button>
        <?php include '../layout/footer.php'; ?>
    </div>
</body>
</html>