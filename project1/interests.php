<?php
$title = "Interests";
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
include dirname(__DIR__) . "/project1/templates/header.php"; 


echo '<h1>Interests</h1>';

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

include dirname(__DIR__) . "/project1/templates/footer.php"; 
?>