<?php
	session_start();
?>

<!DOCTYPE html>	<!-- THIS IS ACTUALLY THE WEBSITE ITSELF-->
<html>
<head>
<meta charset="UTF-8">
<title>Login System</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="authenticate.php" method="POST">
	<input type="text" name="userId" placeholder="user ID"><br>
	<input type="password" name="userPwd" placeholder="Password"><br>
	<button type="submit">Login</button>
</form>

<?php
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}
	else{
		echo "Not logged in";
	}
?>

<br><br>

<form action="signUp.php" method="POST">
	<input type="text" name="firstName" placeholder="First Name"><br>
	<input type="text" name="lastName" placeholder="Last Name"><br>
	<input type="text" name="userId" placeholder="user ID"><br>
	<input type="password" name="userPwd" placeholder="Password"><br>
	<button type="submit">Sign up</button>
</form>
<br>
<form action="logout.php" method="POST">
	<button>Log out</button>
</form>

</body>
</html>