<?php
require "header.php";
?>
<main>
        <section class="index-banner">
            <div class="vertical-center">
                <h2>need some<br>space?</h2>
                <h1>This is the storage you need!</h1>
            </div>
        </section>
        <section class="index-links">
            <?php
                if (isset($_SESSION['userId'])) {
                    
                } 
                else {
                    echo '<a href="login.php">
                    <div class="index-boxlink-square" id="login-for-phone">
                        <h3>LOGIN</h3>
                    </div>
                </a>
                <a href="signup.php">
                    <div class="index-boxlink-rectangle">
                        <h3>SIGNUP</h3>
                    </div>
                </a>';
                }
            ?>
            <a href="#">
                <div class="index-boxlink-square">
                    <h3>SERVICES</h3>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-rectangle">
                    <h3>OTHER WEBSITES</h3>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square">
                    <h3>ABOUT</h3>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square">
                    <h3>CONTACT</h3>
                </div>
            </a>
        </section>
        <div class="content">
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p>You are logged in!</p>';
        } 
        else {
            echo '<p>You are logged out!</p>';
        }
    ?>
</div>
    </main>


<?php
    require "footer.php";
?>