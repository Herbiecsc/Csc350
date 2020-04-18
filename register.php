<!DOCTYPE html>
<html>


<body>




<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.





$page_title = 'register.php';
// include('header.php');

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








<?php include('footer.php'); ?>