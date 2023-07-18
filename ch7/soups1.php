<?php
//set title
$title = "No Soup For You!";

include dirname(__DIR__) . "/templates/header.php"; 

echo "<h1>Mmm...soups</h1>";

// create the array:
$soups = [
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian'
];

// count and print the current number of elements
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// add three items to the array
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

// count and print number of elements again
$count2 = count($soups);
print "<p>After adding three more soups, the array now has $count2 elements.</p>";


echo "<pre>";

// print "<p>$soups</p>";

print_r($soups);
// var_dump($soups);

echo "</pre>";

// print each key and value
foreach ($soups as $day => $soup) {
  print "<p>$day: $soup</p>\n";
}

include dirname(__DIR__) . "/templates/footer.php"; 
?>