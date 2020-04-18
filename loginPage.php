
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		
.div1
{
	background-color: #66CC33;
	position: absolute;
	left: 35%;
	top: 20%;
	border: solid;
	border-color: #66CC33;
	width: 330px;
	border-radius: 20px;
	padding: 20px;

}
.loginPageColor
{
	background-color: #3366CC;
}
	</style>
	<title>Ebuy-Login</title>
</head>
<body class="loginPageColor">
<div class="div1">
	<form action="includes/login.php" action="home.php" method="POST">
	<h1>Welcome To Ebuy</h1>
	<label for="Username">Username: </label>
	<input class="in" id="username" type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="" required>
	</p>
	<p>
	<label for="password">Password: </label>
	<input class="in" id="password" type="password" name="password"
	size="10" maxlength="20" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" required>
	
	<p>Buyer<input type="radio" name="buyOrSell" value="buy">
	   Seller<input type="radio" name="buyOrSell" value="sell">
	
	<p>
		<!-- Where LOGIN happens -->
		<button type="submit" name="submitLogin" value="Login"><a href="home.php">Login</a>
		</button>
		<button><a href="forgotPass.php">Forgot Password</a></button>
		<button><a href="registerPage.php">Sign Up!</a></button></p>
	
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="#">Terms</a>&ensp;&ensp;<a href="#">Privacy</a>&ensp;&ensp;<a href="#">Contact Ebuy</a>
	
</form>


</div>
</body>
</html>	