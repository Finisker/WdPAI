<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<div class="container">

    <div class="logo-container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="logo-name">
            Game Support
        </div>
    </div>

    <div class="login-container">
        <form class="login" action="login" method="POST">
            <div class="login-place">
                Login
            </div>
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <button type="submit">LOGIN</button>

        </form>
        <form class="register-button" action="register_b" method="GET">
            <button type="submit" href="http://localhost:8080/register">REGISTER</button>
        </form>

    </div>
</div>
</body>