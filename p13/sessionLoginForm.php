<html>
    <head>
        <title>login page</title>
    </head>
    <body>
        <?php
        if(isset($_GET["error"])){
            $error = $_GET["error"];
        }else{
            $error = "";
        }

        $message = "";
        if($error=="failed"){
            $message = "failed to login, please login again";
        }
        ?>
        <p style="color: red;"><?php echo $message;?></p>
        <form action="sessionLoginProcess.php" method="post">
            <table>
                <tr>
                    <td>username:</td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>