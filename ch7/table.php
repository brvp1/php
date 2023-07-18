<?php
//set title
$title = "Practice Tables";

include dirname(__DIR__) . "/templates/header.php"; 

$soups = [
  'Monday' => 'Clam Chowder',
  'Tuesday' => 'White Chicken Chili',
  'Wednesday' => 'Vegetarian'
];

$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';
?>

<h1>Soups with HTML</h1>

<table>
    <?php
      foreach ($soups as $day => $soup) {
        echo "<tr>";
        print "<td>$day:</td><td>$soup</td>";
      }
    ?>
</table>



<?php
include dirname(__DIR__) . "/templates/footer.php"; 
?>