<html>

<head></head>

<body>
    <?php
    $rawString = "welcome birmingham parent. 
        your replacemenet is a pleasure to have!";

    $malestr = str_replace("replacement", "son", $rawString);
    $femalestr = str_replace("replacemenet", "daughter", $rawString);

    echo "son : " . $malestr . "<br>";
    echo "daughter : " . $femalestr . "<br>";
    ?>
</body>

</html>