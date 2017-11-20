<?php
session_start();
$login = htmlspecialchars($_POST["login"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$checkin_password = htmlspecialchars($_POST["checking-password"]);

$_SESSION["login"] = $login;
$_SESSION["email"] = $email;

$mysqli = new mysqli ("localhost", "root", "", "users");
$mysqli->query("SET NAMES 'utf8'");
$input = $mysqli->query("SELECT `login` FROM `registr` WHERE `login` = '$login'");
$arr = mysqli_fetch_array($input);

if(!$arr){
    if($password == $checkin_password){
        $input = $mysqli->query("INSERT INTO `registr` (`id`, `login`, `email`, `password`, `date`) VALUES ('' , '$login', '$email', '".md5($password)."', '".time()."')");
        $sign_up = "Your account has created!";
    }
    else {
        $sign_up = "Passwords are different!";
    }
}
else{
    $sign_up = "User with this login has created!";
}

echo $sign_up;
$mysqli->close();
?>