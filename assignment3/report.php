<?php
/*
Author: Bhairavi Patel
Date: 06/23/2023
*/

define('TITLE', 'Report');
define('HEADLINE', 'Report an Issue');
include(dirname(__DIR__) . '/assignment3/templates/header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $problem = false;

    if (empty(trim($_POST['date_time']))) {
        $problem = true;
        print '<p class="text--error">Please enter the date and time!</p>';
    }

    if (empty(trim($_POST['full_name']))) {
        $problem = true;
        print '<p class="text--error">Please enter your full name!</p>';
    }

    if (empty(trim($_POST['description']))) {
        $problem = true;
        print '<p class="text--error">Please enter the problem description!</p>';
    }

    // Process request if no problem is found
    if (!$problem) {
        $request_type = $_POST['request_type'];
        $full_name = $_POST['full_name'];
        $date_time = $_POST['date_time'];
        $description = $_POST['description'];
        // Print a message:
        print "<p class=\"text--success\">Thank you, $full_name!<br>
        Your request has been submitted.
        </p>";

        print "<p class=\"text--success\">Summary of request:<br>
        Type: $request_type<br>
        Date and Time: $date_time<br>
        Description: $description";

        //Clear the posted values:
        $_POST = [];
    }
}
?>

<form action="report.php" method="post" class="form--inline">
    <p>Request Type:  
        <?php
            $request_value = ['Bug Fix', 'New Feature', 'Other'];

            print '<select name="request_type">';

            foreach ($request_value as $value) {
                $selected = '';

                if (isset($_POST['request_type']) && $_POST['request_type'] == $value) {
                    $selected = 'selected';
                }

                print "\n<option value=\"$value\" $selected>$value</option>";
            }
            
            print '</select>';
        ?>
    </p>

    <p>Date and Time:
        <input type="text"
        name="date_time" size="30"
        value="<?php
            if (isset($_POST['date_time'])) {
                print htmlspecialchars($_POST['date_time']);
            } ?>">
    </p>

    <p>Full Name:
        <input type="text" name="full_name" size="25"
        value="<?php 
            if (isset($_POST['full_name'])) {
                print htmlspecialchars($_POST['full_name']);
            }
        ?>">
    </p>

    <p>Description:
        <textarea name="description" rows="8" columns="80">
        <?php 
            if (isset($_POST['description'])) {                
                print htmlspecialchars($_POST['description']);
            }
        ?>
        </textarea>
    </p>

    <p>
        <input type="submit" name="submit" value="Submit" class="button--pill">
    </p>

</form>

<?php
    include(dirname(__DIR__) . '/assignment3/templates/footer.php');
?>