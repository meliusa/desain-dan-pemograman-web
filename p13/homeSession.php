<html>
    <head>
        <title>login page</title>
    </head>
    <body>
        <?php
        session_start();

        if($_SESSION['status'] == "login"){
            echo "welcome " . $_SESSION["username"];
        ?>
        <br> <a href="sessionLogout.php">Log Out</a>
        <?php
        }
        else{
            echo "u are not login. please";
        }
        ?>
        <a href="sessionLoginForm.php">login</a>
    </body>
</html>