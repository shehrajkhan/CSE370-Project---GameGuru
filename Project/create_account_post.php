<?php
require "connect.php";

$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$type="user";

$query="INSERT INTO customer VALUES('$username','$email','$password','$type')"; 
mysqli_query($conn,$query);
header("Location:login.php");

?>