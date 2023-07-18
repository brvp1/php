<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Connect to MySQL</title>
</head>

<body>
    <?php // Script 12.1 -mysql9_connect.php
    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);

    try {
        $dbc = mysqli_connect('localhost', 'username', 'Password', 'myblog');

        print '<p>Successfully connected to the database!</p>';

        // close db connection
        mysqli_close($dbc);
    } catch (mysqli_sql_exception $e) {

        print '<p style="color:red;">Could not connect to the database.:<br>' . mysqli_connect_error() . '</p>';

        error_log($e->__toString(), 3, "/var/www/html/ch12/my-errors.log");
    }


    ?>
</body>

</html>