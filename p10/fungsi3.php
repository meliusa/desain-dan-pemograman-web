<html>

<head></head>

<body>
    <h2>fungsi menghitung luas lingkaran</h2>
    <?php
    echo "luas lingkaran dengan jari jari 7m = " . luas_lingkaran(7) . " cm";

    function luas_lingkaran($jarijari)
    {
        return 3.14 * $jarijari * $jarijari;
    }
    ?>
</body>

</html>