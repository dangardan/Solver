$(document).ready(() => {


    // Sign UP jquery
    $("#signupbutton").on('click', function(e) {
        e.preventDefault();
        var tracker = 0;
        var textbox = document.querySelectorAll('.textbox');
        for (var i = 0; i < textbox.length; i++) {
            if (textbox[i].value == "") {
                textbox[i].style.border = "1px solid red";
                tracker++;

            } else {
                textbox[i].style.border = "1px solid grey";
            }
        }

        var pwd = $('#password');
        var cpwd = $('#confirmpassword');
        if (pwd.val() != cpwd.val()) {
            pwd.css("border", "1px solid red");
            cpwd.css("border", "1px solid red");
            alert('Password Dont Match.')
        } else {
            if (tracker == 0) {
                var uname = $('#username').val();
                var email = $('#email').val();
                var password = $('#password').val();
                $.ajax({
                    url: "../php/save.php",
                    type: "POST",
                    data: {
                        uname: uname,
                        email: email,
                        password: password
                    },
                    success: function(result) {
                        var result = JSON.parse(result);
                        if (result.status == 100) {
                            window.location.href = "../views/Welcome.php"
                        } else if (result.status == 101) {
                            alert(result.message);
                        }
                    }
                });
            } else {
                alert("Please fill all field");
            }


        }







    });

    //Login jquery
    $("#loginbutton").on('click', function(e) {
        e.preventDefault();
        var username = $('#uname');
        var password = $('#pwd');
        var tracker = 0;
        var textbox = document.querySelectorAll('.textbox');
        for (var i = 0; i < textbox.length; i++) {
            if (textbox[i].value == "") {
                textbox[i].style.border = "1px solid red";
                tracker++;

            } else {
                textbox[i].style.border = "1px solid grey";
            }
        }

        if (tracker > 0) {
            alert('fill out all fields');
        } else {
            var username = $('#uname').val();
            var password = $('#pwd').val();
            $.ajax({
                url: "../php/login.php",
                type: "POST",
                data: {
                    username: username,
                    password: password
                },
                success: function(result) {
                    var result = JSON.parse(result);
                    if (result.status == 100) {

                        window.location.href = "../views/Welcome.php";

                    } else if (result.status == 101) {
                        alert(result.message);
                    }

                }

            });




        }



    });

    $("#logoutbutton").on('click', function(e) {
        window.location.href = "../php/logout.php";
    });
    $("#finishButton").on('click', function(e) {
        e.preventDefault();
        var mc = document.querySelector('input[name="mc"]:checked').value;
        var tf = document.querySelector('input[name="trfl"]:checked').value;
        var fill = document.querySelector('input[name="fill"]').value;
        console.log(mc + ' ' + tf + ' ' + fill)
        $.ajax({
            url: "../php/quiz-submit.php",
            type: "POST",
            data: {
                mchoice: mc,
                tfchoice: tf,
                blank: fill
            },
            success: function(result) {
                console.log(result)
                var result = JSON.parse(result);
                if (result.status == 100) {
                    window.location.href = "../views/results.php"
                } else if (result.status == 101) {
                    alert(result.message);
                }
            }
        });



    });

    $(".tchat").on('click', function(e) {
        $(".tchatbox").fadeIn();
    });

    $(".pageholder").on('click', function(e) {
        $(".tchatbox").hide();
    });

    $("#SignupButton").on('click', function(e) {
        window.location.href = "../views/SignUp.php";
    })

    $("#sendbutton").on('click', function(e) {
        var message = $(".textmessage").val();
        var formatofmessage = `<div class= "design"> <p> ${message} </p></div>`
        $(".ttextarea").append(formatofmessage);
    });

    $("#quizbutton").on('click', function(e) {
        window.location.href = "../views/Topic.php";
    })

    $("#historybutton").on('click', function(e) {
        window.location.href = "../views/history.php";
    })


    $("#leaderboardbutton").on('click', function(e) {
        window.location.href = "../views/ranking.php";
    })

    $(".card").on('click', function(e) {
        window.location.href = "../views/Choose Quiz.php";
    })
    $("#confirmBtn1").on('click', function(e) {
        window.location.href = "../views/results.php";
    });
});


$(window).on('load', function() {

    $("#rankingtable").load("../php/load-ranking.php");

});