<?php
// Define a page title and include the header:
define('TITLE', 'Logout');
include (dirname(__DIR__).'/project1/templates/header.php');


//detroy the session
session_destroy();

//clear the Session variable
$_SESSION = [];


echo '<p>You are now logged out.</p>';

include (dirname(__DIR__).'/project1/templates/footer.php');
?>

