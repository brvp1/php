<?php 

     /* This page lets people log into the site. */

    // Set two variables with default values:
    $loggedin = false;
    $error = false;

    // get db connection
    include(dirname(__DIR__).'/ch13/mysqli_connect.php');

    print $db_password;

     // Set the page title and include the header file:
     define('TITLE', 'Login');
     include(dirname(__DIR__).'/ch13/templates/header.php');

    // Check if the form has been submitted:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $query = "SELECT email, password FROM admin WHERE email = '".$_POST['email']."'";

        //print $query;

        try {
            // run the quey on the DB
            $result = mysqli_query($dbc, $query);

            // get the first row
            if ($row = mysqli_fetch_array($result)) {

                $db_email = $row['email'];
                $db_password = $row['password'];

            } else {

                $error = 'The submitted address and password fo not match those on DB!';
                //print $error;

            }


        } catch (mysqli_sql_exception $e) {

            error_log($e->__toString(), 3, "/var/www/html/ch13/my-errors.log");

        } finally {

            mysqli_close($dbc);

        }

        // Handle the form:
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            if ( (strtolower($_POST['email']) == $db_email) && 
                 (sha1(trim($_POST['password'])) == $db_password) && !$error) { 

                    // Create the cookie:
                    //setcookie('Samuel', 'Clemens', time()+3600);

                    // Create a session
                    $_SESSION['email'] = $_POST['email']; // save email in a session

                    // indicate they are logged in:
                    $loggedin = true;
                    
            } else { // Incorrect credentials
                
               $error = 'The submitted email address and password do not match those on file!';


            }

        } else { // Missing a field

            $error = 'Please make sure you enter both an email address and a password!';

        }

    } // IF validation block

   

    // Print an error if one exists:
        if ($error) {
            print '<p class="error">' . $error . '</p>';
        }
        
        // Indicate the user is logged in, or show the form:
        if ($loggedin) {
        
            print '<p>You are now logged in!</p>';

        } else {
        
            print '<h2>Login Form</h2>
                <form action="login.php" method="post">
                <p><label>Email Address <input type="email" name="email"></label></p>
                <p><label>Password <input type="password" name="password"></label></p>
                <p><input type="submit" name="submit" value="Log In!"></p>
                </form>';
        
        } 

        include(dirname(__DIR__) . '/ch13/templates/footer.php');

?>


<!-- 
$query = "SELECT email, password FROM admin WHERE email = '".$_POST['email']."'";

        //print $query;

        try {
            // run the query on the DB
            $result = mysqli_query($dbc, $query);

            // get the first row
            if ($row = mysqli_fetch_array($result)) {
                $db_email = $row['email'];
                $db_password = $row['password'];
            } else {
                $error = 'The submitted email address and password do not match those on DB!';
                //print $error;
            }
            
        } catch (mysqli_sql_exception $e) {
            error_log($e->__toString(), 3, "/var/www/html/ch13/my-errors.log");
        } finally {
            mysqli_close($dbc);
        }


        // Handle the form
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            if ( (strtolower($_POST['email']) == $db_email) 
                && ($_POST['password'] == $db_password) && !$error) {
                // Create the cookie:
                setcookie('Samuel', 'Clemens', time()+3600);
                
                // indicate they are logged in:
                $loggedin = true;

            } else { // Incorrect credentials

                //$error = 'The submitted email address and password do not match those on file!';

            }
        } else { // Missing a field

            $error = 'Please make sure you enter both an email address and a password!';

        }
    } // if validation block -->


    <!-- To make website ssl (secure) 
    Terminal commands:
    1. sudo a2enmod ssl
    2. systemctl restart apache2
    3. sudo a2ensite default-ssl.conf
    4. systemctl reload apache2 -->


