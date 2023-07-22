<?php
/* 
Sueda Tare
06/30/2023
COP2842
*/
session_start();
// Set the page title and include the header file:
define('TITLE', 'Education');
include (dirname(__DIR__).'/project1/templates/header.php');

// Database connection settings
$host = 'localhost';
$user = 'root';
$password = 'password';
$database = 'my_project';

// Create database connection
$dbc = mysqli_connect($host, $user, $password, $database);

// Check if the database connection was successful
if (!$dbc) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Retrieve education data from the database
$query = "SELECT * FROM education";
$result = mysqli_query($dbc, $query);

// Check if the query executed successfully
if ($result) {
    // Display education information
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<h3>' . $row['degree'] . '</h3>';
            echo '<p>School: ' . $row['school_name'] . '</p>';
            echo '<p>Start Date: ' . $row['start_date'] . '</p>';
            echo '<p>End Date: ' . $row['end_date'] . '</p>';
            echo '<hr>';
        }
    } else {
        echo '<p>No education information found.</p>';
    }
} else {
    echo '<p>Error retrieving education information.</p>';
}

// Close the database connection
mysqli_close($dbc);

include (dirname(__DIR__).'/project1/templates/footer.php');
?>

