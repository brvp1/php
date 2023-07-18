<?php
//set title
$title = "I Must Sort This Out!";

include dirname(__DIR__) . "/templates/header.php";
?>

<!-- Script 7.6 - list.html -->
<div>
  <p>Enter the words you want
    alphabetized with each individual word
    separated by a space:</p>

  <form action="list.php" method="post">
    <input type="text" name="words" size="60">
    <input type="submit" name="submit" value="Alphabetize!">

  </form>
</div>


<?php
include dirname(__DIR__) . "/templates/footer.php";
?>