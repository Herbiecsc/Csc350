<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<title></title>
</head>
<body>

</body>
</html>


<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.





$page_title = 'register.php';
include('header.php');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require('connect.php'); // Connect to the db.

	$errors = []; // Initialize an error array.

	// Check for a first name:
	if (empty($_POST['firstname'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
	}

	// Check for a last name:
	if (empty($_POST['lastname'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
	}

	if (empty($_POST['address'])) {
		$errors[] = 'You forgot to enter your address.';
	} else {
		$addie = mysqli_real_escape_string($dbc, trim($_POST['address']));
	}


	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	if (empty($_POST['username'])) {
		$errors[] = 'You forgot to enter your username.';
	} else {
		$user = mysqli_real_escape_string($dbc, trim($_POST['username'])); // what does trim do?
	}
	

	// Check for a password and match against the confirmed password:
	if (!empty($_POST['password'])) {
		if ($_POST['password'] != $_POST['comfirmedPass']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['password']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}

	if (empty($errors)) { // If everything's OK.

		// Register the user in the database...

		// Make the query: // what is sha2($p, 512) 
		$q = "INSERT INTO buyer (firstname, lastname, address, email, username, password, shoppingcart ) VALUES ('$fn', '$ln', '$addie', '$e', '$user',SHA2('$p', 512), 'cart' )";
		$r = @mysqli_query($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.

			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered. You will actually be able to log in!</p><p><br></p>';

		} else { // If it did not run OK.

			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p>';

		} // End of if ($r) IF.

		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		include('footer.php');
		exit();

	} else { // Report the errors.

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br>\n";
		}
		echo '</p><p>Please try again.</p><p><br></p>';

	} // End of if (empty($errors)) IF.

	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>

<body>
<div class="div1">
	<form action="register.php" method="post">
	<p>
	<label for="First Name">First Name: </label>
	<input  class="in" class="move" id="firstname" type="text" name="firstname" size="15" maxlength="20" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" placeholder="John" required></p> 
	</p>	
	<p>
	<label for="Last Name">Last Name: </label>
	<input class="in" id="lastname" type="text" name="lastname" size="15" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" placeholder="Smith" required>
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
	size="10" maxlength="20" value="<?php if (isset($_POST['password'])) echo $_POST['comfirmedPass']; ?>" required>
	<p>Confirm Password: <input class="in" type="password" name="comfirmedPass" size="10" maxlength="20" value="<?php if (isset($_POST['comfirmedPass'])) echo $_POST['comfirmedPass']; ?>" ></p>
	<p>Buyer<input type="radio" name="buyOrSell" value="buy">
	   Seller<input type="radio" name="buyOrSell" value="sell">
	</p>
	<p><input type="submit" name="submit" value="Register">
		<button><a href="login.php">Login</a></button>
		<button><a href="forgotPass.php">Forgot Password</a></button></p>
	</p>
</form>
</div>
</body>





<!-- <h1>Register</h1>
<form action="register.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
	<p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
	<p>Password: <input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" ></p>
	<p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" ></p>
	<p><input type="submit" name="submit" value="Register"></p>
</form> -->
<?php include('footer.php'); ?>