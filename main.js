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


});