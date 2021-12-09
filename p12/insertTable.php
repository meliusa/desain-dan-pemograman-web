<?php 

$connect=mysqli_connect("localhost", "root", "", "web_db");

if($connect) {
    echo "koneksi berhasil <br>";
}

else {
    echo "koneksi gagal". mysqli_connect_error($connect);
}

$query="insert into student(name,address)
values('kevin', 'malang'),
('stephanie', 'surabaya'),
('sammy', 'jakarta')";

if(mysqli_query($connect, $query)){
    echo "data baru berhasil ditambahkan";
}else{
    echo "data baru gagal ditambahkan <br>". mysqli_error($connect);
}

mysqli_close($connect);

?>