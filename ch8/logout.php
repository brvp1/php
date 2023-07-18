<?php
// start sessions
session_start();

// Reset session array
$_SESSION = [];

// Destroy session data on the server:
session_destroy();

define('TITLE', 'Logout');
include(dirname(__DIR__).'/ch8/templates/header.php');

?>

<h2>Welcome to the J.D. Salinger Fan Club</h2>
<p>You are now logged out.</p>
<p>Thank yoyu for using this site. We hope you liked it.
Blah, blah, blah...
Blah, blah, blah...
</p>
<?php include(dirname(__DIR__).'/ch8/templates/footer.php'); ?>