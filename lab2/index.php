<?php

    session_start();

    function canLogin($username, $password) {
        if ($username === "bob.storms" && $password === "Test123") {
            return true;
        } else {
            return false;
        }
    }

    if(!empty($_POST)) {
        // Er is data verzonden
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(canLogin($username, $password)) {
            // LOGIN
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
        } else {
            $error = true; 
        }
    }

    if($_SESSION["loggedin"] == true) {
        $loggedin = true;
    }

    if(!empty($_GET)) {
        $page = $_GET["page"];
    }

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitch | Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if($loggedin == true): ?>
    <header>
        <nav class="nav">
            <a href="?page=browse">Browse</a>
            <a href="?page=getdesktop">Get desktop</a>
            <a href="?page=tryprime">Try prime</a>
            <a href="#" class="loggedIn">
                <div class="user--avatar"><img
                        src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387"
                        alt=""></div>
                <h3 class="user--name"><?php echo $_SESSION["username"]; ?></h3>
                <span class="user--status">Watching dakotaz</span>
            </a>
            <a href="logout.php">Log out?</a>
        </nav>
    </header>
    <?php endif; ?>

    <div id="app">

        <?php if(!$loggedin): ?>

        <h1>Log in to Twitch</h1>

        <nav class="nav--login">
            <a href="#" id="tabLogin">Log in</a>
            <a href="#" id="tabSignIn">Sign up</a>
        </nav>

        <?php if($error): ?>
            <div class="alert">That password was incorrect. Please try again</div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form form--login">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form form--signup hidden">
                <label for="username2">Username</label>
                <input type="text" id="username2">

                <label for="password2">Password</label>
                <input type="password" id="password2">

                <label for="email">Email</label>
                <input type="text" id="email">
            </div>

            <input type="submit" class="btn" id="btnSubmit" value="Log In"/>
        </form>

        <?php else: ?>

        <h1>
            <?php
                switch($page) {
                    case "browse":
                        echo "Browse some streamers! 🕹";
                        break;
                    case "getdesktop":
                        echo "Getting the desktop app! 💻";
                        break;
                    case "tryprime":
                        echo "Let's try prime! ✌🏻";
                        break;
                    default:
                        echo "Welcome to Twitch!";
                }
            ?>
        </h1>

        <?php endif; ?>

    </div>
</body>

</html>