<?php

$host = 'localhost'; //localhost
$user1 = 'root';   //user
$pass = '';// no password
$db = 'userpassword'; // database

//connect to database..
mysql_connect($host, $user1, $pass);
mysql_select_db($db);
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// "user_password" is TABLE...
	$sql ="SELECT * FROM user_password WHERE user='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql);
if (mysql_num_rows($res) == 1) {
	echo "You have been logged in sucessfully....";
	exit();
}
else {
	echo "invalid login Username and password. please return and enter correct password";
	exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<form method="post" action="database.php">
	<strong>Username</strong>
	<input type="text" name="username"/>
	<strong>Password</strong>
	<input type="password" name="password"/>
	<input type="submit" name ="submit" value = "Login"/>
</form>
</body>
</html>