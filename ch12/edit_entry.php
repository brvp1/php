<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit a Blog Entry</title>
</head>

<body>
    <h1>Edit an Entry</h1>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try {

        $dbc = mysqli_connect('localhost', 'username', 'password', 'myblog');

        // set the character set:
        mysqli_set_charset($dbc, 'utf8');

        if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Display the entry in a form:
            // Define the query.
            $query = "SELECT title, entry FROM entries WHERE id={$_GET['id']}";
            if ($r = mysqli_query($dbc, $query)) { // Run the query.
                $row = mysqli_fetch_array($r); // Retrieve the information.

                // Make the form:
                print '<form action="edit_entry.php" method="post">
            <p>Entry Title: <input type="text" name="title" size="40" maxsize="100" value="' .
                    htmlentities($row['title']) . '"></p>
            <p>Entry Text: <textarea name="entry" cols="40" rows="5">' . htmlentities($row['entry']) . '</textarea></p>
            <input type="hidden" name="id" value="' . $_GET['id'] . '">
             <input type="submit" name="submit" value="Update this Entry!">
            </form>';
            }

        } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form. 39
            // Validate and secure the form data:
            $problem = FALSE;
            if (!empty($_POST['title']) && !empty($_POST['entry'])) {
                $title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['title'])));
                $entry = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['entry'])));
            } else {
                print '<p style="color: red;">Please submit both a title and an entry.</p>';
                $problem = TRUE;
            }

            if (!$problem) {
                // Define the query.
                $query = "UPDATE entries SET title='$title', entry='$entry' WHERE id={$_POST['id']}";
                $r = mysqli_query($dbc, $query); // Execute the query.
                // Report on the result:
                if (mysqli_affected_rows($dbc) == 1) {
                    print '<p>The blog entry has been updated.</p>';
                } else {
                    print '<p style="color: red;">Could not update the entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
                } // No problem! 64
            } else { //NoIDset.
                print '<p style="color: red;">This page has been accessed in error.</p>';
            } //EndofmainIF.


        }
    } catch (mysqli_sql_exception $e) {

        print '<p style="color: red;">Could not add the entry because:<br>' .
            mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

        error_log($e->__toString(), 3, "/var/www/html/ch12/my-errors.log");
    } finally {

        mysqli_close($dbc); // Close the connection.

    }


    ?>

</body>

</html>