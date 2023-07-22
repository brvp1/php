<?php
/*
Author: Bhairavi Patel
Date: 07/21/2023
*/

$file = "config.conf";
$file_text = file_get_contents($file);

$rows = explode("\n", $file_text);

$host_array = explode(" ", $rows[0]);
$username_array = explode(" ", $rows[1]);
$password_array = explode(" ", $rows[2]);
$database_array = explode(" ", $rows[3]);

$host = $host_array[1];
$username = $username_array[1];
$password = $password_array[1];
$database = $database_array[1];

try {
    $dbc = mysqli_connect($host, $username, $password, $database);

    mysqli_set_charset($dbc, 'utf8');

} catch (mysqli_sql_exception $e) {

    error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");

    // redirect to error page
    header('Location: error.php');
    exit();
    
}
?>