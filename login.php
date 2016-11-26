<?php
	/*session_start();

	//connect to database
	$db=@mysqli_connect("localhost","root","","authentication");

	if (isset($_POST['login_btn'])) {
	 	$username=mysql_real_escape_string($_POST['username']);
	 	$Password=mysql_real_escape_string($_POST['Password']);

	 	$Password=md5($Password);
	 	$sql="SELECT * FROM users WHERE username='$username' AND Password='$Password'";
	 	$result=mysqli_query($db,$sql);

	 	if (mysqli_num_rows($result)==1) {
	 		$_SESSION['message']="You are now logged in";
	 		$_SESSION['username']=$username;

	 	}else{
	 		$_SESSION['message']="username/Password combination incorrect";
	 	}
	 }
*/

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register,login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="moto">
		<img src="images\LOGO1.ico" style="float:left"/>
		<h1>Learn English</h1>
		<p>Fast and easy way to learn english</p>
	</div>

	<h2>Log In an Existing Account</h2>
<form method="post" action="login_btn">
	<table>
		<tr>
			<td><input type="text" name="username" class="textInput" placeholder="User Name "></td>
		</tr>
		<tr>
			<td><input type="Password" name="Password" class="textInput" placeholder="Password"></td>
		</tr>
	<tr>
		<td>
			<br>
			<a href="#">Forget Password..?</a>
		</td>
	</tr>
		<tr>
			<td><input type="submit" name="login_btn" value="Log IN"></td>
		</tr>
	</table>
</form>
</body>
</html>
