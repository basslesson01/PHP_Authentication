<?php
$conn = mysqli_connect("localhost", "root", "", "loginTest");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>