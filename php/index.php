<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JTJ's NoSQL Injection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        <form method="POST" action="update_login.php">
            <div id="form">
                <div id="title">Member Login</div>
                <div><input type="text" name="username" id="username" placeholder="USERNAME"></div>
                <div><input type="text" name="password" id="password" placeholder="PASSWORD"></div>
                <div><button id="btnLogin">SIGN IN</button></div>
            </div>
            <div id="formBottom" class="row">
                <div class="col"><span><a href="javascript:alert('boop');">Forgot Password?</a></span></div>
                <div class="col"><span><a href="regist.php">Register</a></span></div>
            </div>
    </form>
</body>
</html>