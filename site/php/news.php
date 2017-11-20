<?php 
session_start();
$text = htmlspecialchars($_POST["textarea"]);
$user = $_SESSION["login"];
// $img = $_POST(["img"]);
$img = htmlspecialchars($_POST["textarea"]);
$res = "Your news has added!";
// $news['text'] = $text;
// $news['user'] = $user;
// $news['img'] = $img;
// $news['res'] = "Your news has added!";
$news = array("text" => $text, "user"=>$user, "img"=>$img, "res"=>$res);
$mysqli = new mysqli("localhost", "root", "", "users");
$mysqli->query("SET NAMES utf8");
$mysqli->query("INSERT INTO `news` (`id`, `user`, `text`, `img`, `date`) VALUES ('','$user','$text', '$img', '".time()."')");
$mysqli->close();

echo json_encode($news);
?>