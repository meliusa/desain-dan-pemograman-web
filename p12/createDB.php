<?php
$connect = mysqli_connect("localhost", "root", "");

if ($connect) {
    echo "koneksi berhasil";
} else {
    echo "koneksi gagal";
}

$query = "create database web_db";
if (mysqli_query($connect, $query)) {
    echo "database berhasil dibuat";
} else {
    echo "database gagal dibuat" .  mysqli_error($connect);
}
mysqli_close($connect);
