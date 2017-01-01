<?php //THIS IS ACTUALLY THE LOGIN CHECK
session_start();
include 'dbHandler.php';

$uid = $_POST['userId'];
$pwd = $_POST['userPwd'];

$sql = "SELECT * FROM users WHERE userId='$uid' AND userPwd='$pwd'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
	echo "Your userId or password is incorrect";
}else{
	$_SESSION['id'] = $row['id'];
}

header("Location: login.php");