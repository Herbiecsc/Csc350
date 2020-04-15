<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div class="div1">
	
	<label for="Username">Username: </label>
	<input class="in" id="username" type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="Herb123" required>
	</p>
	<p>
	<label for="password">Password: </label>
	<input class="in" id="password" type="password" name="password"
	size="10" maxlength="20" value="<?php if (isset($_POST['password'])) echo $_POST['comfirmedPass']; ?>" required>
	<p>Confirm Password: <input class="in" type="password" name="comfirmedPass" size="10" maxlength="20" value="<?php if (isset($_POST['comfirmedPass'])) echo $_POST['comfirmedPass']; ?>" ></p>
	<p>Buyer<input type="radio" name="buyOrSell" value="buy">
	   Seller<input type="radio" name="buyOrSell" value="sell">
	</p>
	<p><input type="submit" name="submit" value="login">
		<button><a href="forgotPass.php">Forgot Password</a></button></p>
	</p>
</form>
</div>
</body>
</html>