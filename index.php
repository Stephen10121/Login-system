<?php
require "header.php";
?>

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

<?php
    require "footer.php";
?>