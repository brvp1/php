<?php // Script 13.6 - logout.php
/* This is the logout page. It destroys
the cookie. */

// Destroy the cookie, but only if it already exists:
// if (isset($_COOKIE['Samuel'])) {

//     setcookie('Samuel', FALSE, time() - 300);
// }

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