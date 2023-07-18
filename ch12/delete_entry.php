<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Delete a Blog Entry</title>
</head>

<body>
    <h1>Delete an Entry</h1>

    <?php

    try {

        // Connect and select:
        $dbc = mysqli_connect('localhost', 'username', 'password', 'myblog');

        if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Display the entry in a form:
            $query = "SELECT title, entry FROM entries WHERE id={$_GET['id']}";

            if ($result = mysqli_query($dbc, $query)) {
                $row = mysqli_fetch_array($result);

                print '<form action="delete_entry.php" method="post">
                    <p>Are you sure you want to delete this entry?</p>
                    <p><h3>' . $row['title'] . '</h3>' . $row['entry'] . '<br>
                    <input type="hidden" name="id" value="' . $_GET['id'] . '">
                    <input type="submit" name="submit" value="Delete this Entry!"></p>
                    </form>';
            } else {
                print '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
            }
        } else if (isset($_POST['id']) && is_numeric($_POST['id'])) {
            // Define the query:
            $query = "DELETE FROM entries WHERE id={$_POST['id']} LIMIT 1";
            $r = mysqli_query($dbc, $query); // Execute the query.

            // Report on the result:
            if (mysqli_affected_rows($dbc) == 1) {
                print '<p>The blog entry has been deleted.</p>';
            } else {
                print '<p style="color: red;">Could not delete the blog entry because:<br>' .
                    mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
            }
        } else {
            print '<p style="color: red;">This page has been accessed in error.</p>';

        }
    } catch (mysqli_sql_exception $e) {

        error_log($e->__toString(), 3, "/var/www/html/ch12/my-errors.log");
    } finally {

        mysqli_close($dbc); // Close the connection. 

    }

    ?>

</body>

</html>