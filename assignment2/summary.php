<?php
/*
  Author: Bhairavi Patel
  Date: 05/21/2023
*/

$title = "Summary";
include "header.php";

$request_type = $_POST['request_type'];
$date = $_POST['date'];
$time = $_POST['time'];
$full_name = $_POST['full_name'];
$description = $_POST['description'];

// Print the received data
print "<p>Thank you $full_name:<br>Your request has been submitted.</p>";

print "<p>Summary of request:
      <br>Type: $request_type
      <br>Date and Time: $date, at $time
      <br>Description: $description
      </p>";

include "footer.php"; ?>