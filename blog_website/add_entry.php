<?php
define('TITLE', "Add Entry");
include(dirname(__DIR__) . '/blog_website/templates/header.php');

print '<h1>Add an entry</h1>';

// if (!is_administrator()) {
//     print '<h2>Access Denied!</h2><p class="error">Please log in or register to add your blog entry!</p>';

//     include(dirname(__DIR__).'/blog_website/templates/footer.php');
//     exit();
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $problem = false;

    if (!empty($_POST['title']) && !empty($_POST['entry']) && !empty($_POST['author'])) {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $entry = $_POST['entry'];

    } else {

        print '<p style="color: red;">Please submit both a title and an entry.</p>';

        $problem = true;

    }

    if (!$problem) {

        include(dirname(__DIR__).'/blog_website/mysqli_connect.php');

        try {

            $title = mysqli_real_escape_string($dbc, trim(strip_tags($title)));

            $title = mysqli_real_escape_string($dbc, trim(strip_tags($author)));

            $entry = mysqli_real_escape_string($dbc, trim(strip_tags($entry)));

            $query = "INSERT INTO entries (title, author, entry, date_entered) VALUES ('$title', '$author', '$entry', NOW())";

            mysqli_query($dbc, $query);

            if (mysqli_affected_rows($dbc) == 1) {

                print '<p style="color: green;">Your blog entry has been added!</p>';
            }

        } catch (mysqli_sql_exception $e) {

            error_log($e->__toString(), 3, "/var/www/html/blog_website/my-errors.log");

        } finally {

            mysqli_close($dbc);

        }

    } // No problem

} // end IF

?>

<form action="add_entry.php" method="post">
    <p>
        Blog Title: 
        <input type="text" name="title" size="50" maxsize="100">
    </p>

    <p>
        Author: 
        <input type="text" name="author" size="50" maxsize="150">
    </p>

    <p>
        Blog Entry: 
        <textarea name="entry" cols="50" rows="5"></textarea>
    </p>
    <input type="submit" name="submit" value="Post Blog Entry!">
</form>

<?php
include(dirname(__DIR__) . '/blog_website/templates/footer.php');
?>