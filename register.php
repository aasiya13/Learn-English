<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['register_btn'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT INTO user (first_name, last_name, email,password)
  VALUES ('$firstname', '$lastname', '$email' , '$password')";

  if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
  } else{
    echo "<script>
        alert('You Have Successfully create an account.. Thank you');
        </script>";
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register,login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
  <script type="js/first.js"></script>
</head>

<body>
	<div class="moto">
		<img src="images\LOGO1.ico" style="float:left"/>
		<h1>Learn English</h1>
		<p>Fast and easy way to learn english</p>
	</div>

	<h2>Create an Account</h2>
<form method="post" action="register.php">
	<table>
		<tr>
			<td><input type="text" name="firstname" class="textInput" placeholder="First Name ">
          <span id = "error_first_name" style="color:red;"></span>
      </td>
		</tr>
		<tr>
			<td><input type="text" name="lastname" class="textInput" placeholder="Last Name">
            <span id = "error_last_name" style="color:red;"></span>
      </td>
		</tr>
    <tr>
			<td><input type="text" name="email" class="textInput" placeholder="Email Address"></td>
      <span id = "error_email" style="color:red;"></span>
		</tr>
		<tr>
			<td><input type="Password" name="password" class="textInput" placeholder="Password ">
        <span id = "error_password1" style="color:red;"></span>
      </td>
		</tr>
		<tr>
			<td><input type="Password" name="password2" class="textInput" placeholder="Password agian ">
        <span id = "error_password2" style="color:red;"></span>
      </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" id="register_btn" value="Sign up"></td>
		</tr>
	</table>
</form>
</body>
</html>
