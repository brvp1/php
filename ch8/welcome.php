<?php // Script 8.14 - welcome.php

// need the session
session_start();

define('TITLE', 'Welcome to the J.D. Salinger Fan Club!'); 
include(dirname(__DIR__).'/ch8/templates/header.php');
?>

<h2>Welcome to the J.D. Salinger Fan Club!</h2>
<?php
print '<p>Hello, '. $_SESSION['email'] . '!</p>';
// print how long they've been logged 
date_default_timezone_set('America/New_York');

print '<p>You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '.</p>';

// logout link
print '<p><a href="logout.php">Logout</a></p>';
?>


<?php include(dirname(__DIR__).'/ch8/templates/footer.php'); ?>