<html>

<head></head>

<body>
    <?php
    $numberedString = "123456789012345678901234567890";
    $fivePos = strpos($numberedString, "5");
    echo "posisi angka 5 di dalam string adalah $fivePos <br>";
    $fivePos2 = strpos($numberedString, "5", $fivePos + 1);
    echo "posisi angka 5 yang kedua di dalam string adalah $fivePos2";
    ?>
</body>

</html>