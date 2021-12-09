<?php
$connect = mysqli_connect("localhost","root","");

if($connect){
    echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
