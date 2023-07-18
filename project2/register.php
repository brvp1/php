<?php
/* 
    Author: Bhairavi Patel
    Date: 06/30/2023
*/
define('TITLE', "Register");
include dirname(__DIR__) . "/project2/templates/header.php"; 

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

    if (empty(trim($_POST['email'])) || (substr_count($_POST['email'], '@') != 1) || (substr_count($_POST['email'], ".") != 1)) {
        $problem = true;
        print '<p class="text--error">Please enter your email address!</p>';
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
        // Print a message:
        print '<p class="text--success">You are now registered!<br></p>';

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

    <p><label for="email">Email Address:</label>
        <input type="email" name="email" size="20" 
        value="<?php
                if (isset($_POST['email'])) {
                    print htmlspecialchars($_POST['email']);
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
include dirname(__DIR__) . "/project2/templates/footer.php"; 
?>