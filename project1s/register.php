<?php
/* 
Sueda Tare
06/30/2023
COP2842
*/
session_start();

// Set the page title and include the header file:
define('TITLE', 'Register Page');
include(dirname(__DIR__) . '/project1/templates/header.php');

print '<h2>Register here</h2>';

// Initialize variables for sticky fields
$first_name = '';
$last_name = '';
$username = '';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty(trim($_POST['first_name']))) {
        print "<p style=\"color: red;\">Please enter first name.</p>";
    }
    if (empty(trim($_POST['last_name']))) {
        print "<p style=\"color: red;\">Please enter last name.</p>";
    }
    if (empty(trim($_POST['username']))) {
        print "<p style=\"color: red;\">Please enter username.</p>";
    }
    if (empty(trim($_POST['password']))) {
        print "<p style=\"color: red;\">Please enter password.</p>";
    }

    if ($_POST['password'] !== $_POST['password2']) {
        echo "<p style=\"color: red;\">Passwords do not match!</p>";

    }

    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['username']) && !empty($_POST['password'])) {

        // Need the database connection:
        include(dirname(__DIR__) . '/project1/mysqli_connect.php');

        // Prepare the values for storing:
        $first_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['first_name'])));
        $last_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['last_name'])));
        $username = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['username'])));
        $password = sha1(mysqli_real_escape_string($dbc, trim($_POST['password']))); // Hash the password using sha1

        // Prepare the INSERT statement
        $query = "INSERT INTO user (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

        // Execute the query:
        if (mysqli_query($dbc, $query)) {
            print '<p>Thank you for registering!</p>';
            // Clear the sticky fields after successful registration
            $first_name = '';
            $last_name = '';
            $username = '';
            mysqli_close($dbc);
        } else {
            print '<p style="color: red;">Could not register because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
            error_log(mysqli_error($dbc), 3, "/var/www/html/error.log");
        }
    } else {
        print '<p style="color: red;">Please submit all fields.</p>';
    }
}

// Create the form:
?>
<form action="register.php" method="post" class="form--inline">

    <p><label for="first_name">First Name:</label>
        <input type="text" name="first_name" size="50" value="<?php echo htmlspecialchars($_POST['first_name']); ?>">
    </p>

    <p><label for="last_name">Last Name:</label>
        <input type="text" name="last_name" size="50" value="<?php echo htmlspecialchars($_POST['last_name']); ?>">
    </p>

    <p><label for="username">Username:</label>
        <input type="text" name="username" size="50" value="<?php echo htmlspecialchars($_POST['username']); ?>">
    </p>

    <p><label for="password">Password:</label>
        <input type="password" name="password" size="255" value="<?php echo htmlspecialchars($_POST['password']); ?>">
    </p>

    <p><label for="password2">Confirm Password:</label>
        <input type="password" name="password2" size="255">
    </p>

    <p><input type="submit" name="submit" value="Register!" class="button--pill"></p>

</form>

<?php include(dirname(__DIR__) . '/project1/templates/footer.php'); ?>

