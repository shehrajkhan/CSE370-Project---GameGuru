<?php
require "connect.php";

$email=$_POST["email"];
$password=$_POST["password"];

$confirm_user= "SELECT * FROM customer WHERE email='$email' AND password='$password'";
$check=mysqli_query($conn,$confirm_user);


if($check->num_rows > 0 and $type="admin"){
    header('Location: admin.php');
    exit();
}
elseif($check->num_rows > 0 and $type="user"){
    header('Location: home.php');
    exit();
}
else{
    echo'Incorrect Email or Password';
}
?>