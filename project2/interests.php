<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Interests");
include dirname(__DIR__) . "/project2/templates/header.php"; 

echo '<p>These are some my interests: </p>';

// Store interests and gif source in an array
$interests = [
    "Tennis" => "images/tennis-gif.gif",
    "Reading" => "images/reading-gif.gif",
    "Running" => "images/running-gif.gif"
];

// Display interest and gif
foreach ($interests as $interest => $image) {
  echo "<p><h4>$interest:</h4><img src=\"$image\">";
}

echo "</p>";

include dirname(__DIR__) . "/project2/templates/footer.php"; 
?>