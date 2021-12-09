<?php
include "myconnection.php";

$username = $_POST["username"];
$password = $_POST["password"];
// $password = md5($_POST["password"]);

$query = "SELECT * FROM user WHERE username='$username' && password='$password'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

if($row['level'] == "1"){
    header("location:adminHome.html");
}elseif($row['level'] == "2"){
    header("location:guestHome.html");
}else{
    header("location:loginForm.php?error=failed");
}

?>