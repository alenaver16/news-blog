<?php
session_start();
$email = htmlspecialchars($_POST["forgoted-email"]);

$_SESSION["email"] = $email;

$mysqli = new mysqli("localhost","root", "", "users");
$mysqli->query("SET NAMES utf8");
$input = $mysqli->query("SELECT `email`, `login` FROM `registr` WHERE `email` = '$email'");
$arr = mysqli_fetch_array($input);
if(empty($arr)){
    $mail = "User with this email not found!";
}
else{
    $mail = "We send code to your email adress!";
}
echo $mail;
$mysqli->close();
?>