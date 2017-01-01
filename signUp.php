<?php
session_start();
include 'dbHandler.php';
$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$uid = $_POST['userId'];
$pwd = $_POST['userPwd'];

/*
echo $fName."<br>";
echo $lName."<br>";
echo $uid."<br>";
echo $pwd."<br>";
*/

$sql = "INSERT INTO users (firstName, lastName, userId, userPwd) VALUES ('$fName', '$lName', '$uid', '$pwd')";
$result = mysqli_query($conn, $sql);

header("Location: login.php");