<?php
/* 
    Author: Bhairavi Patel
    Date: 06/30/2023
*/
define('TITLE', "Register");
include dirname(__DIR__) . "/project3/templates/header.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $problem = false; // No problems so far.

    if (empty(trim($_POST['first_name']))) {
        $problem = true;
        print '<p class="text--error">Please enter your first name!</p>';
    }

    if (empty(trim($_POST['last_name']))) {
        $problem = true;
        print '<p class="text--error">Please enter your last name!</p>';
    }

    if (empty(trim($_POST['username']))) {
        $problem = true;
        print '<p class="text--error">Please enter your username!</p>';
    }

    if (empty($_POST['password1'])) {
        $problem = true;
        print '<p class="text--error">Please enter a password!
        </p>';
    }

    if ($_POST['password1'] != $_POST['password2']) {
        $problem = true;
        print '<p class="text--error">Your password did not match your confirmed password!</p>';
    }

    if (!$problem) { // If there weren't any problems...

        include(dirname(__DIR__).'/project3/mysqli_connect.php');

        try {
            $first_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['first_name'])));
            $last_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['last_name'])));
            $username = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['username'])));
            $password = mysqli_real_escape_string($dbc, trim(strip_tags(sha1($_POST['password1']))));

            $query = "INSERT INTO user (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

            mysqli_query($dbc, $query);

            print '<p class="text--success">You are now registered to my website!</p>';

        } catch (mysqli_sql_exception $e) {

            print '<p class="text--error">Could not register because:<br>' .  mysqli_error($dbc);

            error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");

        } finally {

            mysqli_close($dbc);
        }

        // Clear the posted values:
        $_POST = [];

    } else { // Forgot a field

        print '<p class="text--error">Please try again!</p>';
        
    }
} // end of handle form IF.
?>

<form action="register.php" method="post" class="form--inline">
    <p><label for="first_name">First Name:</label>
        <input type="text" name="first_name" size="20" 
        value="<?php
                if (isset($_POST['first_name'])) {
                    print htmlspecialchars($_POST['first_name']);
                } ?>">
    </p>

    <p><label for="last_name">Last Name:</label>
        <input type="text" name="last_name" size="20" 
        value="<?php
                if (isset($_POST['last_name'])) {
                    print htmlspecialchars($_POST['last_name']);
                } ?>">      
    </p>

    <p><label for="username">Username:</label>
        <input type="text" name="username" size="20" 
        value="<?php
                if (isset($_POST['username'])) {
                    print htmlspecialchars($_POST['username']);
                } ?>">
    </p>

    <p><label for="password1">Password: </label>
        <input type="password" name="password1" size="20" 
        value="<?php
                if (isset($_POST['password1'])) {
                    print htmlspecialchars($_POST['password1']);
                } ?>">
    </p>

    <p><label for="password2">Confirm Password:</label>
        <input type="password" name="password2" size="20" 
        value="<?php
                if (isset($_POST['password2'])) {
                    print htmlspecialchars($_POST['password2']);
                } ?>">  
    </p>

    <p><input type="submit" name="submit" value="Register!"></p>

<?php
include dirname(__DIR__) . "/project3/templates/footer.php"; 
?>