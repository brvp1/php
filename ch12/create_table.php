<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Create a Table</title>
</head>

<body>

    <?php
    try {

        $dbc = mysqli_connect('localhost', 'username', 'password', 'myblog');

        // define query

        $query = 'CREATE TABLE entries (
            id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(100) NOT NULL,
            entry TEXT NOT NULL,
            date_entered DATETIME NOT NULL
            ) CHARACTER SET utf8 ';

        // execute the query
        mysqli_query($dbc, $query);

        print '<p>The table has been created!</p>';
    } catch (mysqli_sql_exception $e) {

        print '<p style="color: red;">Could not create the table because:<br>' .
            mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

            error_log($e->__toString(), 3, "/var/www/html/ch12/my-errors.log");

    } finally {

        mysqli_close($dbc); // close the connection
        
    }

    ?>

</body>

</html>