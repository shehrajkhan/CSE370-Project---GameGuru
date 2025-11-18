<?php
session_start();
require "connect.php";

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$combination = $q1 . '-' . $q2 . '-' . $q3;

$query="SELECT * FROM game_guide WHERE Answers = '$combination'";
$check=mysqli_query(mysql: $conn,query: $query);


if ($check->num_rows > 0){

    $row=mysqli_fetch_array($check);
    $_SESSION ['game_guide'] = $row['Guide'];
    header('Location: game-guide.php');
    exit();
}
else{
    echo'Please answer all the Questions';
}

?>