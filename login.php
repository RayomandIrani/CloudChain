<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>
<style>
    html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        font-family: Helvetica, Arial, sans-serif;
        overflow: hidden;
    }

    .ghost {
        position: absolute;
        left: -100%;
    }

    .framed {
        position: absolute;
        top: 50%; left: 50%;
        width: 15rem;
        margin-left: -7.5rem;
    }

    .logo {
        margin-top: -9em;
        cursor: default;
    }

    .form {
        margin-top: -4.5em;
        transition: 1s ease-in-out;
    }

    .input {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 1.125rem;
        line-height: 3rem;
        width: 100%; height: 3rem;
        color: #444;
        background-color: rgba(255,255,255,.9);
        border: 0;
        border-top: 1px solid rgba(255,255,255,0.7);
        padding: 0 1rem;
        font-family: 'Open Sans', sans-serif;
    }
    .input:focus {
        outline: none;
    }
    .input--top {
        border-radius: 0.5rem 0.5rem 0 0;
        border-top: 0;
    }
    .input--submit {
        background-color: rgba(92,168,214,0.9);
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        border-top: 0;
        border-radius: 0 0 0.5rem 0.5rem;
        margin-bottom: 1rem;
    }

    .text {
        color: #fff;
        text-shadow: 0 1px 1px rgba(0,0,0,0.8);
        text-decoration: none;
    }
    .text--small {
        opacity: 0.85;
        font-size: 0.75rem;
        cursor: pointer;
    }
    .text--small:hover {
        opacity: 1;
    }
    .text--omega {
        width: 200%;
        margin: 0 0 1rem -50%;
        font-size: 1.5rem;
        line-height: 1.125;
        font-weight: normal;
    }
    .text--centered {
        display: block;
        text-align: center;
    }
    .text--border-right {
        border-right: 1px solid rgba(255,255,255,0.5);
        margin-right: 0.75rem;
        padding-right: 0.75rem;
    }

    .legal {
        position: absolute;
        bottom: 1.125rem; left: 1.125rem;
    }

    .photo-cred {
        position: absolute;
        right: 1.125rem; bottom: 1.125rem;
    }

    .fullscreen-bg {
        position: fixed;
        z-index: -1;
        top:0; right:0; bottom:0; left:0;
        background: url(images/cloudlogin.jpg) center;
        background-size: cover;
    }

    #toggle--login:checked ~ .form--signup { left:200%; visibility:hidden; }
    #toggle--signup:checked ~ .form--login { left:-100%; visibility:hidden; }

    @media (height:300px){.legal,.photo-cred{display:none}}
</style>
<input type="radio" checked id="toggle--login" name="toggle" class="ghost" />
<input type="radio" id="toggle--signup" name="toggle" class="ghost" />

<!--<img class="logo framed" style="margin-top: -18em" src="cloudlogin.jpg" alt="Tumblr logo" />-->

<div class="form form--login framed">
    <div id="login_submit_error" class="" style="background: #e66345;color: white;padding: 5%;display: none;font-size: 14px"></div>
    <?php if(isset($_GET['account'])=='created'){
        echo '<div class="" style="background: #45e68d;color: white;padding: 5%;font-size: 14px">Account Created</div>';
    }
    ?>

    <input id="uname" type="text" placeholder="Username" class="input input--top" />
    <input id="upass" type="password" placeholder="Password" class="input" />
    <button type="submit" id="login" value="Log in" class="input input--submit">Log In</button>
    <label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label>
</div>

<div class="form form--signup framed">
    <div id="login_submit_error2" class="" style="background: #e66345;color: white;padding: 5%;display: none;font-size: 14px"></div>
    <input id="uemail" type="email" placeholder="Email" class="input input--top" />
    <input id="uname2" type="text" placeholder="Username" class="input input--top" />
    <input id="upass2" type="password" placeholder="Password" class="input" />
    <button type="submit" id="signup" value="Log in" class="input input--submit">Sign Up</button>

    <label for="toggle--login" class="text text--small text--centered">Not new? <b>Log in</b></label>
</div>

<div class="fullscreen-bg"></div>
</body>
<script>
    $('#login').click(function () {
        $.ajax({
            type: "POST",
            url: "calls/login.php",
            data: {uname:$('#uname').val(), upass:$('#upass').val()},
            cache: false,
            success: function (response) {
                var object = $.parseJSON(response);
                if(object.result === "login"){
                    location.href='http://localhost/raymond/';
                }else{
                    $('#login_submit_error').html(object.message);
                    $('#login_submit_error').css('display','block');
                }
            }
        });
    });
    $('#signup').click(function () {
        $.ajax({
            type: "POST",
            url: "calls/signup.php",
            data: {
                uname:$('#uname2').val(),
                upass:$('#upass2').val(),
                uemail:$('#uemail').val()},
            cache: false,
            success: function (response) {
                var object = $.parseJSON(response);
                if(object.result === "login"){
                    location.href='http://localhost/raymond/login.php?account=created';
                }else{
                    $('#login_submit_error2').html(object.message);
                    $('#login_submit_error2').css('display','block');
                }
            }
        });
    })
</script>
</html>