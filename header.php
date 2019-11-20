<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cloud Storage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="grid">
        <div class="header">
            <div class="logolist">
                <a href="index.php">
                    <div id="logo">
                        <img src="img/logo.png" alt="logo " id="logo">
                    </div>
                </a>
                <div id="homelist">
                    <ul>
                        <li><a href="index.php" class="button">Home</a></li>
                        <li><a href="#" class="button">Portfolio</a></li>
                        <li><a href="#" class="button">About Me</a></li>
                        <li><a href="#" class="button">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="formthing">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post" id="logoutform">
                        <button type="submit" name="logout-submit" >Logout</button>
                    </form>';
                    } 
                    else {
                        echo '<form action="includes/login.inc.php" method="post" id="loginform">
                        <input type="text" name="mailuid" placeholder="Username/E-mail..." class="textbox">
                        <input type="password" name="pwd" placeholder="Password..." class="textbox">
                        <button type="submit" name="login-submit" >Login</button>
                    </form>
                    <a href="signup.php" >Signup</a>';
                    }
                ?>
            </div>
        </div>