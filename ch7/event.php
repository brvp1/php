<?php
//set title
$title = "Add an Event";

include dirname(__DIR__) . "/templates/header.php";
?>

<!-- Script 7.8 - event.html -->
<div>
  <p>Use this form to add an event:</p>

  <form action="event_handler.php" method="post">
    <p>Event Name: <input type="text" name="name" size="30"></p>
    <p>Event Days:
      <input type="checkbox" name="days[]" value="Sunday"> Sun
      <input type="checkbox" name="days[]" value="Monday"> Mon
      <input type="checkbox" name="days[]" value="Tuesday"> Tue
      <input type="checkbox" name="days[]" value="Wednesday"> Wed
      <input type="checkbox" name="days[]" value="Thursday"> Thu
      <input type="checkbox" name="days[]" value="Friday"> Fri
      <input type="checkbox" name="days[]" value="Saturday"> Sat
    </p>
    <input type="submit" name="submit" value="Add the Event!">

  </form>
</div>


<?
include dirname(__DIR__) . "/templates/footer.php";
?>