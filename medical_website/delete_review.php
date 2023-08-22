<?php
    define('TITLE', 'Dolphin Physican Care | Edit Review');
    include(dirname(__DIR__).'/medical_website/templates/boilerplate.php');
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>

<?php

// Cannot access edit page without logging in
if (!is_registered()) {
	print '<br><h2>Access Denied!</h2><p class="text-danger">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New patient? Click <a href="signup.php">here</a> to register.<br>';

    include(dirname(__DIR__).'/medical_website/templates/info.php');
	include(dirname(__DIR__).'/medical_website/templates/footer.php');
	exit();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include(dirname(__DIR__).'/medical_website/mysqli_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) { 

	$query = "SELECT title, review FROM review WHERE id={$_GET['id']}";

	if ($result = mysqli_query($dbc, $query)) { 

		$row = mysqli_fetch_array($result);

		print '<form action="delete_review.php" method="post">
		<br><div class="container"><h3>Are you sure you want to delete this quote?</h3>
		<p><b>Title: </b>' . $row['title'] . '<br><br><b>Review: </b>' . $row['review'] . '</p>';

		print '<br><input type="hidden" name="id" value="' . $_GET['id'] . '">
		<p><input type="submit" name="submit" value="Delete this Quote!"></p></div>
		</form>';

	} else { // Couldn't get the information.
		print '<p class="text-danger">Could not retrieve the quote because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0) ) { // Handle the form.

	// Define the query:
	$query = "DELETE FROM review WHERE id={$_POST['id']} LIMIT 1";
	$result = mysqli_query($dbc, $query); // Execute the query.

	// Report on the result:
	if (mysqli_affected_rows($dbc) == 1) {

		print '<p class="text-success">The quote entry has been deleted.</p>';

	} else {
		print '<p class="text-danger">Could not delete the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} else { // No ID received.
	print '<p class="text-danger">This page has been accessed in error.</p>';
} // End of main IF.

mysqli_close($dbc); // Close the connection.


// info section and footer

include(dirname(__DIR__).'/medical_website/templates/info.php');
include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>