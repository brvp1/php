<?php // Script 13.1 - mysqli_connect.php

    /* This script connects to the database
    and establishes the character set for communications. */

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

        // Connect:
        $dbc = mysqli_connect($host, $username, $password, $database);

        //Set the character set:
        mysqli_set_charset($dbc, 'utf8');

    } catch (mysqli_sql_exception $e) {

        // redirect to error page
        header('Location: error.php');
        exit();

    }
?>