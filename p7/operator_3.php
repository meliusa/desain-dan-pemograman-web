<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
   $a=true;
   $b=false;

   echo "nilai a and b adalah "; var_dump($a and $b); echo "<br>";
   echo "nilai a or b adalah "; var_dump($a or $b);  echo "<br>";
   echo "nilai a xor b adalah "; var_dump($a xor $b); echo "<br>";
   echo "nilai a && b adalah "; var_dump($a && $b); echo "<br>";
   echo "nilai a || b adalah "; var_dump($a || $b); echo "<br>";
   echo "nilai !a || b adalah "; var_dump(!$a || $b); echo "<br>";
   ?>
</body>

</html>