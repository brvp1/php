<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>View My Blog</title>
</head>

<body>
    <h1>My Blog</h1>

    <?php
    try {

        // Connect and select:
        $dbc = mysqli_connect('localhost', 'username', 'password', 'myblog');

        $query = 'SELECT * FROM entries ORDER BY date_entered DESC';

        if ($result = mysqli_query($dbc, $query)) {

            while ($row = mysqli_fetch_array($result)) {
                print "<p><h3>{$row['title']}</h3>{$row['entry']}<br>
                <a href=\"edit_entry.php?id={$row['id']}\">Edit</a>
                <a href=\"delete_entry.php?id={$row['id']}\">Delete</a>
                </p><hr>\n";
            }
        }
    } catch (mysqli_sql_exception $e) {

        print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

        error_log($e->__toString(), 3, "/var/www/html/ch12/my-errors.log");
    } finally {

        mysqli_close($dbc); // Close the connection. 

    }
    ?>
</body>

</html>