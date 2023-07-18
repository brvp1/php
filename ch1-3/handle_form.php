<?php 
include "header.php"; 

// echo "<pre>";

// print_r($_REQUEST);

// echo "</pre>";

$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

// print the received data
print "<p>Thank you, $title $name, for your comments.</p>";

print "<p>You stated that you found this website to be '$response' and added: <br>$comments</p>";

include "footer.html";
?>