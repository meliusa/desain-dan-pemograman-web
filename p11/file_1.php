<html>

<head></head>

<body>
    <?php
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'r');
    // $theData = fread($fh, 5);
    // $theData = fread($fh, filesize($myFile));
    $theData = fgets($fh);
    fclose($fh);
    echo $theData;
    ?>
</body>

</html>