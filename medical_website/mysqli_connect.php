<?php

$file = "config.conf";
$file_text = file_get_contents($file);

$rows = explode("\n", $file_text);

$username_array = explode(" ", $rows[0]);
$password_array = explode(" ", $rows[1]);
$host_array = explode(" ", $rows[2]);
$database_array = explode(" ", $rows[3]);

$username = $username_array[1];
$password = $password_array[1];
$host = $host_array[1];
$database =  $database_array[1];

 try {

    $dbc = mysqli_connect($host, $username, $password, $database);

    mysqli_set_charset($dbc, 'utf8');

 } catch (mysqli_sql_exception $e) {

        echo 'Error: ' . $e->getMessage();
    
        error_log($e->__toString(), 3, "/var/www/html/blog_website/my-errors.log");

        // header('Location: error.php');
        // exit();

}