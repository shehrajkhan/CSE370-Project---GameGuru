<?php
require "connect.php";

$name=$_POST["name"];
$email=$_POST["email"];
$g_name=$_POST["game"];
$message=$_POST["message"];

$query="INSERT INTO request(name, email, g_name, message) VALUES('$name','$email','$g_name','$message')"; 
mysqli_query($conn,$query);
header("Location: request-game.php");

?>