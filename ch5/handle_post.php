<?php
//set title
$title = "Forum Posting";

include dirname(__DIR__) . "/templates/header.php"; 

// Script 5.2 - handle_post.php
/* This script receives five values from posting.php:
first_name, last_name, email, posting, submit */

// Get the values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting'], false);

// Create full name
$name = trim($first_name) . ' ' . trim($last_name);

// // make link to another page:
// $name = urlencode($name);
// $email = urlencode($_POST['email']);

// print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

// get a word count
$words = str_word_count($posting);

$posting = str_replace('badword', 'XXXXXX', $posting);

// get a snippet of the string
//$posting = substr($posting, 0, 50);

// print a message
print "<div>Thank you $name, for your posting:
        <p>$posting...</p>
        <p>($words words)</p></div>";
        

include dirname(__DIR__) . "/templates/footer.php";
?>