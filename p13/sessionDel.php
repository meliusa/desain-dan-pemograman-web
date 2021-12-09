<?php
session_start();
?>

<html>
    <body>
        <?php
        session_unset();
        session_destroy();

        echo "all session var are removed now, and the session is destroyed";
        ?>
    </body>
</html>