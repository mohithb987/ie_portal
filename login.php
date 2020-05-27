<?php echo '<html>
<head>
	<title>Signup and Login page</title>
	<script type="text/javascript">document.getElementById("submit").onmouseenter=function(){myFunction()};
	document.getElementById("submit").onmouseleave=function(){myFunction1()};
function myFunction(){
	document.getElementById("submit").style="background-color: green;text-align: center; padding: 10px 10px;";
}
function myFunction1(){
	document.getElementById("submit").style="background-color: white;text-align: center; padding: 10px 10px;";
}</script>
	</head>
	<body>
		<br/>
		<br/>
<h1 style="color: red" align="center">Login</h1><br/>
		<form action="home.php" style="border-style: solid; border-width: 2px; text-align:center;margin-left: 550px;margin-right: 550px; padding: 40px 40px; ">
		Enter username: <input type="text" name="uname"/><br/><br/>
		Enter password: <input type="password" name="pass"/><br/><br/>
		<button type="submit" name="submit" id="submit" style="text-align: center; padding: 10px 10px;" onmouseenter="myFunction()" onmouseleave="myFunction1()">Login</button><br/><br/>
		<a href="signup1.php">Click here to register</a>
		</form>

</body>
</html>
';?>