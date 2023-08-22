<?php
include(dirname(__DIR__) . '/includes/functions.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (defined('TITLE')) {
                print TITLE;
            } else {
                print "Stellar Blog";
            }
        ?>
    </title>
</head>
<body>
    <div>
        <h1>Stellar Blog</h1>
        <!-- Begin changable content -->