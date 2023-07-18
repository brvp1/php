<?php
$title = "Skills";
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
include dirname(__DIR__) . "/project1/templates/header.php"; 

echo "<h1>Skills</h1>";

// List each skill in an array
$technical_skills = [
    1 => 'Front-end development', 'Back-end developemnt', 'Mobile Application development', 'Object Oriented Programming', 'Databases', 'APIs'
];

$soft_skills = [
    1 => 'Communication', 'Leadership',
    'Management', 'Detail-oriented', 'Client relations', 'Analysis', 'Problem solving'
];

// Nested Array for each type of skill
$skills = [
    "Technical Skills" => $technical_skills,
    "Soft Skills" => $soft_skills
];

// Display list of skills in a table using a nested loop
print '<table>';

foreach ($skills as $type => $skill) {
    print "<tr><th>$type</th></tr>";
    foreach ($skill as $skill_item) {
        print "<tr><td>$skill_item</td></tr>";
    }
   print "</tr>";
}
print "<table>";

// Store all the images for technologies I use in an array
$technologies = [
    "images/java-logo.png",
    "images/cpp-logo.png",
    "images/js-logo.png",
    "images/mysql-logo.png",
    "images/swift-logo.png",
    "images/html5-logo.png",
    "images/css3-logo.png"
];

echo "<h3>Technologies I use: </h3>";

//Display the images using a loop
echo "<table><tr>";

for ($i = 0; $i < count($technologies); $i++) {
    print "<td><img src=\"$technologies[$i]\" width=\"50\" height=\"50\"".">"."</td>";
}

echo "</tr></table>";

include dirname(__DIR__) . "/project1/templates/footer.php"; 
?>