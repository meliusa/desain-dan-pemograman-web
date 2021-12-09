<html>

<head></head>

<body>
    Sun &nbsp; Mon &nbsp; Tue &nbsp; Wed &nbsp; Thu &nbsp; Fri &nbsp; Sat <br>
    <?php
    $x = 1;
    $tanggal = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 7; $j++) {
            $x++;
            if ($x <= 5) {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            } else if ($x <= 15) {
                echo $tanggal++ . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            } else {
                echo $tanggal++ . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    ?>
</body>

</html>