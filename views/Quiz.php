<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <h1 style="text-align: center;">Quiz Name</h1>


    <div class="QuizBackground">
        <p class = "Quiztime">1:30:42</p>


        <div class="QuizQuestions">
            <h3>Question 1</h3>
            <p>What is the sum of 1 + 1?</p>
            <button>A. 1</button>
            <button>B. 2</button>
            <button>C. 3</button>
            <button>D. 5</button>
        </div>

        <div class="QuizQuestions">
            <h3>Question 2</h3>
            <p>What is the sum of 1 + 2?</p>
            <input type="text">
        </div>

        <div class="QuizQuestions">
            <h3>Question 3</h3>
            <p>Is the sum of 1 + 2 = 5?</p>
            <button> True </button>
            <button>False</button>
        </div>

        <button id = "finishButton"> Finish Quiz </button>
        <?php include '../layout/footer.php'; ?>
    </div>
</body>
</html>