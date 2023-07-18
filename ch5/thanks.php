<?php
//set title
$title = "Forum Posting";

include dirname(__DIR__) . "/templates/header.php"; 

print "Thank you, ".$_GET['name'].". We will contact you at ".$_GET['email'] . ".";

echo "<br><br>Hash mypassword: " . password_hash("mypassword", PASSWORD_DEFAULT);

include dirname(__DIR__) . "/templates/footer.php";
?>