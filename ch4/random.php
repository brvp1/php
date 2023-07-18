<?php
//set title
$title = "Lucky Numbers";

include dirname(__DIR__) . "/templates/header.php"; 

/* This script generates 3 random numbers */

$n1 = mt_rand(1, 99);
$n2 = mt_rand(1, 99);
$n3 = mt_rand(1, 99);

echo "<p>Your lucky numbers are: <br>
        $n1 <br>
        $n2 <br>
        $n3 <br>
      </p>";

include dirname(__DIR__) . "/templates/footer.php";
?>