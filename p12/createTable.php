<?php
$connect = mysqli_connect("localhost", "root", "","web_db");

if ($connect) {
    echo "koneksi berhasil <br>";
} else {
    echo "koneksi gagal";
}

$query = "create table student(
id int primary key auto_increment,
name varchar(30) not null,
address varchar(100)
)";

if (mysqli_query($connect, $query)) {
    echo "tabel berhasil dibuat <br>";
} else {
    echo "tabel gagal dibuat " . mysqli_error($connect);
}

mysqli_close($connect);
?>