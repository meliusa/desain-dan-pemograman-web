<html>
    <head>home</head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <body>
        <h1>data mahasiswa</h1>
        <input type="button" value="tambah data">
        <table>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>alamat</th>
                <th>aksi</th>
            </tr>
            <?php
            include "myconnection.php";

            $query = "select * from student";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['address'];?></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id'];?>"><button>Edit</button></button></a>
                    <a href="delete.php?id=<?php echo $row['id'];?>"><button>Hapus</button></button></a>
                </td>
            </tr>
            <?php
                }
            }else{
                echo "0 result";
            }
            ?>
        </table>
    </body>
</html>