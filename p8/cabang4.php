<html>

<head></head>

<body>
    <?php
    $tujuan = "malang";

    echo "mau main kemana?" . $tujuan . "<br>";
    echo "<br> pesan : ";

    switch ($tujuan) {
        case "batu":
            echo "jangan lupa bawa jaket";
            break;
        case "bandung":
            echo "awas kalau belanja laper mata";
            break;
        case "bali":
            echo "pakai sunblock SPF 50";
            break;
        default:
            echo "ya udah belajar aja";
    }
    ?>
</body>

</html>