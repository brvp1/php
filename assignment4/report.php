<?php
/*
Author: Bhairavi Patel
Date: 06/23/2023
*/

define('TITLE', 'Report');
define('HEADLINE', 'Report an Issue');
include(dirname(__DIR__) . '/assignment4/templates/header.php');
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

        // Convert the input date and time to MySQL 'datetime' format
        $sql_date_time = date('Y-m-d H:i:s', strtotime($date_time));

        try {

            $dbc = mysqli_connect('localhost', 'student', 'password', 'tracking_system');

            mysqli_set_charset($dbc, 'utf8');

            $request_type = mysqli_real_escape_string($dbc, $request_type);

            $full_name = mysqli_real_escape_string($dbc, trim(strip_tags($full_name)));

            $sql_date_time = mysqli_real_escape_string($dbc, trim(strip_tags($date_time)));

            $description = mysqli_real_escape_string($dbc, trim(strip_tags($description)));

            $query = "INSERT INTO issues (requestType, fullName, description, creationDate) VALUES ('$request_type', '$full_name', '$description', '$sql_date_time')";

            mysqli_query($dbc, $query);

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

        } catch (mysqli_sql_exception $e) {

            print '<p style="color: red;">Could not submit request because:<br>' .
                    mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

                error_log($e->__toString(), 3, "/var/www/html/assignment4/my-errors.log");

        } finally {

            mysqli_close($dbc);

        }
        
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
        placeholder="2023-01-23 15:11:02"
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
    include(dirname(__DIR__) . '/assignment4/templates/footer.php');
?>