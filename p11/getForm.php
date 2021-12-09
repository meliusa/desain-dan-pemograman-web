<html>

<head></head>

<body>
    <!-- welcome <?php echo $_GET['username']; ?> !!<br>
    your email address is : <?php echo $_GET['email']; ?> -->

    <?php
    if (isset($_GET["username"]) and isset($_GET["email"])) {
        echo "welcome " . $_GET["username"] . "!<br>";
        echo "your email addres is : " . $_GET["email"];
    } else {
        echo "maaf, anda harus mengakses halaman ini dari form_1.html";
    }
    ?>


</body>

</html>