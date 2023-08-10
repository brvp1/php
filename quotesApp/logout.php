<?php 

// Destroy the session, but only if it exists
session_destroy();

// Clear the session variable
$_SESSION = [];

// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.php');

// Print a message:
echo '<p>You are now logged out.</p>';

// Include the footer:
include('templates/footer.php');

?>