<html>
    <head>
        <title>php mysql</title>
    </head>
    <body>
        <?php
        include "myconnection.php";
        $id= $_GET['id'];
        $query = "SELECT * FROM student WHERE id=$id";
        $result = mysqli_query($connect, $query);
        ?>

        <form action="editProcess.php" method="get">
            <table>
                <?php
                while($row = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td>id: </td>
                    <td><input type="text" name="myid" id="" value="<?php echo $row['id'];?>" readonly></td>
                </tr>
                <tr>
                    <td>nama: </td>
                    <td><input type="text" name="myname" id="" value="<?php echo $row['name'];?>"></td>
                </tr>
                <tr>
                    <td>alamat0: </td>
                    <td><textarea name="myaddress" id="" cols="30" rows="10"><?php echo $row['address'];?></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="simpan" name="save">
                    </td>
                </tr>

                <?php
                }
                ?>
            </table>
        </form>

    </body>
</html>