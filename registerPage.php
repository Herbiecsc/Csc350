<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ebuy-Register</title>
</head>
<style type="text/css">
.registerCss
{
	background-color: #66CC33;
	position: relative;
	top: 10%;
	left: 35%;
	border: solid;
	border-color: #66CC33;
	width: 330px;
	border-radius: 20px;
	padding: 20px;

}
.registerEbuy
{
	position: absolute;
	top: 50%;
	left: 13%;
}



</style>
	<body>
<div class="registerCss">
	
	<form action="includes/register.php" method="post">
		<h1>Welcome To Ebuy</h1>
	<p>
	<label for="First Name">First Name: </label>
	<input  class="in" class="move" id="firstname" type="text" name="firstname" size="15" maxlength="20" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" placeholder="" required></p> 
	</p>	
	<p>
	<label for="Last Name">Last Name: </label>
	<input class="in" id="lastname" type="text" name="lastname" size="15" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" placeholder="" required>
	</p>
	<p>
	<label for="Address">Address: </label>
	<input class="in" id="address" type="text" name="address" required>
	</p>
	<label for="Email">Email: </label>
	<input class="in" id="Email" type="Email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"placeholder="johnSmith@gmail.com" required>
	</p>
	<p>
	<label for="Username">Username: </label>
	<input class="in" id="username" type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="Herb123" required>
	</p>
	<p>
	<label for="password">Password: </label>
	<input class="in" id="password" type="password" name="password"
	size="10" maxlength="20" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" required>
	<p>Confirm Password: <input class="in" type="password" name="comfirmedPass" size="10" maxlength="20" value="<?php if (isset($_POST['comfirmedPass'])) echo $_POST['comfirmedPass']; ?>" ></p>
	<p>Buyer<input type="radio" name="buyOrSell" value="buy">
	   Seller<input type="radio" name="buyOrSell" value="sell">
	</p>
	<p><input type="submit" name="submit" value="Register">
		<button><a href="login.php">Login</a></button>
		<button><a href="forgotPass.php">Forgot Password</a></button></p>
	</p>
	
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="#">Terms</a>&ensp;&ensp;<a href="#">Privacy</a>&ensp;&ensp;<a href="#">Contact Ebuy</a>
	
	
</form>
</div>
<!-- <div>
	<img src="#" class="aboutImg"alt="about Ebuy">
</div> -->
</body>

</html>
