<?php
/*
Author: Bhairavi Patel
Date: 06/23/2023
*/

define('TITLE', 'Login');
define('HEADLINE', 'MDC Login');
include(dirname(__DIR__) . '/assignment4/templates/header.php');
?>
<?php

$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    try {

        $dbc = mysqli_connect('localhost', 'student', 'password', 'tracking_system');

        mysqli_set_charset($dbc, 'utf8');

        $query = "SELECT email, password FROM users WHERE email = '" . $_POST['email'] . "'";

        $result = mysqli_query($dbc, $query);

        if ($row = mysqli_fetch_array($result)) {

            $db_email = $row['email'];
            $db_password = $row['password'];

        } else {

            $error = true;

            print '<p class="text--error">Oops!</p>';

        }

    } catch (mysqli_sql_exception $e) {

        error_log($e->__toString(), 3, "/var/www/html/assignment4/my-errors.log");

    } finally {

        mysqli_close($dbc);

    }


    // handle the form
    if ((!empty($_POST['email']) && (!empty($_POST['password'])))) {

        if ((strtolower($_POST['email']) == $db_email)
            && ($_POST['password'] == $db_password && !$error)) {
                
            // session code
            session_start();
            $_SESSION['email'] = $_POST['email'];

            // correct email and password
            ob_end_clean(); // destroy the buffer
            header('Location: home.php');
            exit();
            
        } else {

            print '<p class="text--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>';

        }

    } else { // Forgot a fiels
        print '<p class="text--error">Please make sure you enter both an email address and a password!<br>Go back and try again.</p>';

    }
} else { // Display the form
?>
    <form action="login.php" method="post" class="form--inline">
        <p><label for="email">Email Address:</label>
            <input type="email" name="email" size="20">
        </p>
        <p><label for="password">Password: </label>
            <input type="password" name="password" size="20">
        </p>
        <p>
            <input type="submit" name="submit" value="Log In!" class="button--pill">
        </p>
    </form>
<?php
}
    include(dirname(__DIR__) . '/assignment4/templates/footer.php');
?>