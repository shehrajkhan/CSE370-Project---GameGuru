<?php
require "connect.php";

if (isset($_POST["approve"])) {
    $select_query="SELECT * FROM request where req_number = '{$_POST['approve_value']}'";
    $sel = mysqli_query($conn,$select_query);
    $row1 = mysqli_fetch_assoc($sel);
    $insert_query="INSERT INTO approved VALUES('{$row1['name']}','{$row1['email']}','{$row1['g_name']}','{$row1['message']}')";
    $sel2 = mysqli_query($conn,$insert_query);
    $delete_query="DELETE FROM request WHERE req_number = '{$_POST['approve_value']}'";
    mysqli_query($conn,$delete_query);
    header("Location: admin.php");
}

if (isset($_POST["decline"])){
    $delete_query="DELETE FROM request WHERE req_number = '{$_POST['approve_value']}'";
    mysqli_query($conn,$delete_query);
    header("Location: admin.php");
}

?>