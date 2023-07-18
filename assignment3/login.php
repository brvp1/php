<?php
/*
Author: Bhairavi Patel
Date: 06/23/2023
*/

define('TITLE', 'Login');
define('HEADLINE', 'MDC Login');
include(dirname(__DIR__) . '/assignment3/templates/header.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // handle the form
    if ((!empty($_POST['email']) && (!empty($_POST['password'])))) {
        if ((strtolower($_POST['email']) == 'me@example.com')
            && ($_POST['password'] == 'testpass')
        ) {
            // session code
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = time();


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
    include(dirname(__DIR__) . '/assignment3/templates/footer.php');
?>