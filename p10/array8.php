<html>

<head></head>

<body>
    <h2>sorting array</h2>
    <?php
    $age = array(
        "joe" => "29",
        "elsa" => "27",
        "kevin" => "32",
        "nick" => "24",
        "olaf" => "9",
        "ana" => "17"

    );
    krsort($age);

    foreach ($age as $name => $value) {
        echo "namae = " . $name . ", age = " . $value . "<br>";
    }
    ?>
</body>

</html>