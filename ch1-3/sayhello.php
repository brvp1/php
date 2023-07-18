<?php include "header.php"; 

// Script 3.7 - hello.php 

// this page should receive the name value in the URL

// Say "Hello":
$name = $_GET['name'];

print "<style>.bold { font-weight: bolder; }</style>";

print "<p>Hello, <span class=\"bold\">$name</span>!</p>";

include "footer.html"; ?>