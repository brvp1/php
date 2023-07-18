<?php 
  // Author: Bhairavi Patel
  // Date: 05/21/2023

  $title = "Report"; 
  include "header.php";
?>

<form action="summary.php" method="POST">

    <p>Request Type:
        <select name="request_type" required>
            <option value="Bug Fix">Bug Fix</option>
            <option value="New Feature">New Feature</option>
            <option value="Other">Other</option>
        </select>
    </p>

    <p>Date:
        <input type="date" name="date" required>
    </p>

    <p>Time:
        <input type="time" name="time" required>
    </p>

    <p>Full Name:
        <input type="text" name="full_name" size="25" required>
    </p>

    <p>Description:
        <textarea name="description" rows="5" columns="40" required>
        </textarea>
    </p>

    <p>
        <input type="submit" name="submit" value="Submit">
    </p>
</form>

<? include "footer.php"; ?>