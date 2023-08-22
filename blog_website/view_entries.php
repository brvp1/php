<?php

define('TITLE', 'View All Blog Entries');
include(dirname(__DIR__).'/blog_website/templates/header.php');

print '<h1>Stellar Blog Entries</h1>';

// if (!is_administrator()) {
//     print '<h2>Access Denied!</h2><p class="error">You do not have permission
// to access this page.</p>';
//     include(dirname(__DIR__) . '/blog_website/templates/footer.php');
//     exit();
// }

include(dirname(__DIR__).'/blog_website/mysqli_connect.php');

$query = 'SELECT * FROM entries ORDER BY date_entered DESC';

try {

    if ($result = mysqli_query($dbc, $query)) {

        while ($row = mysqli_fetch_array($result)) {

            print "<p><h3>{$row['title']}</h3><p>- {$row['author']}</p>{$row['entry']}<br>
                <a href=\"edit_entry.php?id={$row['id']}\">Edit</a>
                <a href=\"delete_entry.php?id={$row['id']}\">Delete</a>
                </p><hr>\n";

        }

    }

} catch (mysqli_sql_exception $e) {

    error_log($e->__toString(), 3, "/var/www/html/ch12/my-errors.log");

} finally {

    mysqli_close($dbc);

}

include(dirname(__DIR__).'/blog_website/templates/footer.php');
?>