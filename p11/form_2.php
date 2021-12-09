<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    //ambil nilai variabel error
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }

    //siapkan pesan kesalahan
    $pesan = "";
    if ($error == "variabel_belum_diset") {
        $pesan = "anda harus mengakses halaman ini dari form_2.php";
    } else if ($error == "nama_kosong") {
        $pesan = "nama harus diisi";
    } else if ($error == "email_kosong") {
        $pesan = "email harus diisi";
    }

    //siapkan isian form jika terjadi kesalahan
    if (isset($GET['nama']) and isset($_GET['email']) and isset($_GET['komentar'])) {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
        $komentar = $_GET['komentar'];
    } else {
        $nama = "";
        $email = "";
        $komentar = "";
    }

    ?>

    <span class="error"><?php echo $pesan ?></span>

    <table>
        <form action="prosesForm_2.php" method="get">
            <tr>
                <td>nama: </td>
                <td><input type="text" name="nama" id=""><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>email: </td>
                <td><input type="text" name="email" id=""><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>komentar: </td>
                <td><textarea name="komentar" id="" cols="40" rows="5"><?php echo $komentar; ?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="kirim" name="kirim"></td>
            </tr>
        </form>
    </table>
</body>

</html>