<?php
session_start();
?>

<html>
    <body>
        <?php
        echo "ma fav color is " . $_SESSION['favcolor'] . "<br>";
        echo "ma fav animal is " . $_SESSION['favanimal'];
        ?>
    </body>
</html>