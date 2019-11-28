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
    <link rel="shortcut icon" href="img/cool.ico" type="image/x-icon">
</head>
<body>
    <header>
        <a href="index.php" class="header-brand">Cloud Storage</a>
        <nav>
            <ul>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<li><form action="includes/logout.inc.php" method="post" id="logoutform" class="logoutform">
                        <button type="submit" name="logout-submit" class="button">Logout</button>
                    </form></li>';
                    } 
                    else {
                    }      
                ?>
            </ul>
            <div class="login-signup">
                <ul>
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<li><form action="includes/logout.inc.php" method="post" id="logoutform" class="logoutform">
                            <button type="submit" class="button" name="logout-submit" id="logout-button">Logout</button>
                        </form></li>';
                        } 
                        else {
                            echo '<li><form action="includes/login.inc.php" method="post" id="loginform" class="loginform">
                            <input type="text" name="mailuid" placeholder="Username/E-mail..." class="textbox">
                            <input type="password" name="pwd" placeholder="Password..." class="textbox">
                            <button type="submit" class="button" name="login-submit" >Login</button>
                        </form></li>
                        
                        <li><a href="signup.php" class="button" id="signup-button">Signup</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </header>