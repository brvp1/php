<?php
//set title
$title = "My Little Gradebook";

include dirname(__DIR__) . "/templates/header.php";

/* This script creates, sorts, and prints out an array. */
$grades = [
    'Richard' => 95,
    'Sherwood' => 82,
    'Toni' => 98,
    'Franz' => 87,
    'Melissa' => 75,
    'Roddy' => 85
];

// Print the orogonal array:
print '<p>Originally the array looks like this:<br>';
foreach ($grades as $student => $grade) {
  print "$student: $grade<br>\n";
}
print '</p>';

// Sort by value in reverse order, then print again:
arsort($grades);
print '<p>After sorting the array by value using arsort(), the array looks like this: <br>';
foreach ($grades as $student => $grade) {
      print "$student: $grade<br>\n";
 }
print '</p>';

// Sort by key, then print again:
ksort($grades);
print '<p>After sorting the array by key using ksort(), the array looks like this: <br>';
foreach ($grades as $student => $grade) {
    print "$student: $grade<br>\n";
}
print '</p>';

include dirname(__DIR__) . "/templates/footer.php"; 
?>