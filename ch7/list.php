<?php
//set title
$title = "I Must Sort This Out!";

include dirname(__DIR__) . "/templates/header.php";

/* This script receives a string in
$_POST['words']. It then turns it into
an array, sorts the array alphabetically, and
reprints it. */

$words_array = explode(' ', $_POST['words']);

sort($words_array);

// Turn the array back into a string
$string_words = implode('<br>', $words_array);

// print the results
print "<p>An alphabetized version of the list is:
<br>$string_words</p>";

include dirname(__DIR__) . "/templates/footer.php";
?>