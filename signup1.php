<?php echo'<html>
<head>
	<title>Signup</title>
</head>
<body>
		<h1 style="color: red" align="center">Signup</h1>
		<form action="login.php" style="border-style: solid; border-width: 2px; text-align:left;margin-left: 550px;margin-right: 550px; padding: 40px 40px; ">
		Enter username:<input type="text" name="uname"/><br/><br/>
		Enter password:<input type="password" name="pass"/><br/><br/>
		Confirm password: <input type="password" name="pass2"/><br/><br/>
		Gender: <input type="radio" name="gender">male </input> <input type="radio" name="gender">female </input><br/><br/>
		Date of birth: <input type="Date" name="dob"/><br/><br/>
		email: <input type="email" name="email"/><br/><br/><br/>
		<button type="submit" name="submit" style="margin-left: 100px;">SignUp</button>
		</form>
	</body>
	</html>';?>