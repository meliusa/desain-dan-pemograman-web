<html>

<head></head>

<body>
    <h2>fungsi count()</h2>
    <?php
    $menu = array("rawon", "sate", "nasi goreng");
    $arrLength = count($menu);

    echo "menu hari ini adalah <br>";
    for ($x = 0; $x < $arrLength; $x++) {
        echo $menu[$x] . "<br>";
    }
    echo "<br> saya lapar, saya ingin makan " . "<b>$menu[2]</b>";

    ?>
</body>

</html>