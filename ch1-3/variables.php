<?php 
include "header.html";

// define variables
$year = 2023; // current year
$june_avg = 88; // average
$page_title = "Weather Reports";

echo "<h1>$page_title</h1>";

echo "<h2>June Avergae: $june_avg</h2>";

echo "<h2>Year: $year</h1>";

$street = "100 Main Street";
$city = "State College";
$state = "FL";
$zip = 33161;

print "<p>The address is: <br>$street<br>$city, $state $zip</p>";

include "footer.html";
?>