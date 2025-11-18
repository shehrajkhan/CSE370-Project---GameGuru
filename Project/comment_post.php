<?php
require "connect.php";

$username=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];


$confirm_user= "SELECT email FROM customer WHERE email='$email'";
$check=mysqli_query($conn,$confirm_user);

if ($check->num_rows > 0){
    $query="INSERT INTO comment VALUES('$username','$email','$message')"; 
    mysqli_query($conn,$query);
    echo"your comment has been recorded";
}
else{
    header('Location: login.php');
    exit();   
}

?>