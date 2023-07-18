<?php
/* 
    Author: Bhairavi Patel
    Date: 06/30/2023
*/
session_start();

$_SESSION = [];

session_destroy();

define('TITLE', "Logout");
include dirname(__DIR__) . "/project2/templates/header.php";
?>

<div class="center">
    <h2>Thank you for visiting my website!</h2>
    <p>You are now logged out.</p>
</div>

<?php
include dirname(__DIR__) . "/project2/templates/footer.php";
?>