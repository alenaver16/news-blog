<?php
session_start();
$login = htmlspecialchars($_POST["login"]);
$password = htmlspecialchars($_POST["password"]);

$_SESSION["login"] = $login;

$mysqli = new mysqli("localhost","root","","users");
$mysqli->query("SET NAMES utf8");
$input = $mysqli->query("SELECT `login`, `password` FROM `registr` WHERE `login` = '$login'");
$arr = mysqli_fetch_array($input);

if(empty($arr)){
    $log_in['res'] = "Sorry, can't find account with this login!";
    $log_in['log'] = "";
}
else{
    if(md5($password)==$arr['password']){
        $log_in['res'] = "Welcome to your account!";
        $log_in['log'] = $login;
    }
    else{   
        $log_in['res'] = "Password is not true!";
        $log_in['log'] = "";
    }
}
echo json_encode($log_in);
$mysqli->close();
?>