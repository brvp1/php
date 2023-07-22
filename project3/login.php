<?php
/* 
    Author: Bhairavi Patel
    Date: 06/30/2023
*/

$error = false;
$db_username = null;

define('TITLE', "Login");
include dirname(__DIR__) . "/project3/templates/header.php";
// print some introductory text:
print '<h2>Login Form</h2>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include(dirname(__DIR__).'/project3/mysqli_connect.php');

    $query = "SELECT username, password FROM user WHERE username = '" . $_POST['username'] . "'";

    try {

        $result = mysqli_query($dbc, $query);

        if ($row = mysqli_fetch_array($result)) {

            $db_username = $row['username'];
            $db_password = $row['password'];

        } else {

            $error = "The submitted username and password do not match our records.";

        }

    } catch (mysqli_sql_exception $e) {

        error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");

    } finally {

        mysqli_close($dbc);
    }

    // handle the form
    if ((!empty($_POST['username']) && (!empty($_POST['password'])))) {

        if (($_POST['username'] == $db_username)
            && (sha1(trim($_POST['password'])) == $db_password) && !$error) {
                
            // session code
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['loggedin'] = time();

            // redirect to home page
            ob_end_clean(); // destroy the buffer
            header('Location: home.php');
            exit();

        } else {

            print '<p class="text--error">The submitted username and password do not match those on file!<br>Go back and try again.</p>';

        }
    } else { // Forgot a field

        print '<p class="text--error">Please make sure you enter both a username and a password!<br>Go back and try again.</p>';

    }
} else { // Display the form
?>
    <form action="login.php" method="post">
        <p><label for="username">Username:</label>
            <input type="text" name="username" size="20">
        </p>
        <p><label for="password">Password:</label>
            <input type="password" name="password" size="20">
        </p>
        <p>
            <input type="submit" name="submit" value="Log In!">
        </p>
    </form>
<?php
}

include dirname(__DIR__) . "/project3/templates/footer.php";
?>