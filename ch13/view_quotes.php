<?php // Script 13.8 - view_quotes.php
/* This script lists every quote. */

// Include the header:
define('TITLE', 'View All Quotes');
include(dirname(__DIR__).'/ch13/templates/header.php');

print '<h2>All Quotes</h2>';

// Restrict access to administrators only:
if (!is_administrator()) {
    print '<h2>Access Denied!</h2><p class="error">You do not have permission
to access this page.</p>';
    include(dirname(__DIR__) . 'ch13/templates/footer.php');
    exit();
}

// Need the database connection:
include(dirname(__DIR__) . '/ch13/mysqli_connect.php');

// Define the query:
$query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY date_entered DESC';

try {
    // Run the query:
    if ($result = mysqli_query($dbc, $query)) {

        // Retrieve the returned records:
        while ($row = mysqli_fetch_array($result)) {

            // Print the record:
            print "<div><blockquote>{$row['quote']}</blockquote>- {$row['source']}\n";

            // Is this a favorite?
            if ($row['favorite'] == 1) {
                print ' <strong>Favorite!</strong>';
            }
            // Add administrative links:
            print "<p><b>Quote Admin:</b> <a href=\"edit_quote.php?id={$row['id']}\">Edit</a> <-><a href=\"delete_quote.php?id={$row['id']}\">Delete</a></p></div>\n";
        } // End of while loop. 
    }
} catch (mysqli_sql_exception $e) {
    
    print '<p class="error">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

    error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");

} finally {

    mysqli_close($dbc);

}

mysqli_close($dbc); // Close the connection. 

include(dirname(__DIR__).'/ch13/templates/footer.php'); // Include the footer.