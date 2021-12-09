<?php
include "myconnection.php";

$username = $_POST["username"];
$password = $_POST["password"];
// $password = md5($_POST["password"]);

$query = "SELECT * FROM user WHERE username='$username' && password='$password'";
$result = mysqli_query($connect, $query);
$check = mysqli_num_rows($result);

if($check > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:homeSession.php");
    // header("location:adminHome.html");
}else{
    var_dump($check);
    header("location:loginForm.php?error=failed");
}

?>