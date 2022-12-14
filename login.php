<?php
session_start();
// Change this to your connection info.
include('connection.php');
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('<script>
	alert("Error")
	window.location.href="index.php";</script>');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT email, password FROM webusers WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if ($_POST['password'] === $password) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			header('Location: innerIndex.php');
		} else {
			// Incorrect password
			echo '<script>
				alert("Incorrect username and/or password!")
				window.location.href="index.php";
			</script>';
		}
	} else {
		// Incorrect username
		echo '<script>
			alert("Incorrect username and/or password!")
			window.location.href="index.php";
		</script>';
	}
	$stmt->close();
}
?>