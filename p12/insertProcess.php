<?php

include "myconnection.php";

$name = $_GET['myname'];
$address = $_GET['myaddress'];

$query = "insert into student(name, address)VALUES('$name','$address')";

if(mysqli_query($connect, $query)){
    echo "data baru berhasil ditambahkan";
}else{
    echo "data baru gagal ditambahkan <br> " . mysqli_error($connect);
}

mysqli_close($connect);

?>