<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Interests");
include dirname(__DIR__) . "/project3/templates/header.php"; 
if (!is_administrator()) {

	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New user? Click <a href="register.php">here</a> to register.';

	include(dirname(__DIR__).'/project3/templates/footer.php');
	exit();
}

echo '<p>These are some my interests: </p>';

// Store interests and gif source in an array
$interests = [
    "Tennis" => "images/tennis-gif.gif",
    "Reading" => "images/reading-gif.gif",
    "Running" => "images/running-gif.gif"
];

// Display interest and gif
foreach ($interests as $interest => $image) {
  echo "<p><h4>$interest:</h4><img src=\"$image\">";
}

echo "</p>";

include dirname(__DIR__) . "/project3/templates/footer.php"; 
?>