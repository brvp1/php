<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Licenses & Certifications");
include dirname(__DIR__) . "/project3/templates/header.php"; 

if (!is_administrator()) {

	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New user? Click <a href="register.php">here</a> to register.';

	include(dirname(__DIR__).'/project3/templates/footer.php');
	exit();
}
?>

<h2>Certifications:</h2>
<li>Google Analytics Cetificate</li>
<br><br>
<h2>Licenses:</h2>
<li></li>
<br><br>

<?php
include dirname(__DIR__) . "/project3/templates/footer.php"; 
?>