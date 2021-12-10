<?php include'../layout/loginheader.php';?>
<body class = "WelcomeInfo">
    <h1 style="text-align: center;">Quiz Name</h1>


    <div class="QuizBackground">
        <p class = "Quiztime">1:30:42</p>
        <?php include '../php/quiz-load.php'; ?>
        <!-- <button id = "finishButton"> Finish Quiz </button> -->
        <button id = "finishButton" onclick="showCustom()"> Finish Quiz </button>
        <div id = "customAlert">
            <div id = "box">
                <div class="heading">
                    Warning
                </div>
                <div class = "content">
                    <p>Are you sure you want to submit? </p>
                    <button type = "button" id = "confirmBtn" onclick="hideAlert()">No</button>
                    <button type = "button" id = "confirmBtn1">Yes</button>
                </div>     
            </div>
        </div>
        <?php include '../layout/footer.php'; ?>
    </div>

    
    
    </div>

<Script>
    var customalert = document.getElementById("customAlert");
    function showCustom()
    {
        customalert.style.display = 'block';
    }

    function hideAlert()
    {
        customalert.style.display = 'none';
    }
</Script>

</body>
</html>