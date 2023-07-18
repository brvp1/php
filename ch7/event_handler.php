<?php
//set title
$title = "Add an Event";

include dirname(__DIR__) . "/templates/header.php";

/* This script handle the event form. */
print "<p>You want to add an event
called <b>{$_POST['name']}</b> which
takes place on: <br>";

// print each weekday:
if (isset($_POST['days']) AND is_array(($_POST['days']))) {
    foreach ($_POST['days'] as $day) {
      print "$day<br>\n";
    }
} else {
  print 'Please select at least one weekday for this event!';
}

print '</p>';


include dirname(__DIR__) . "/templates/footer.php";
