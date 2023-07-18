<?php
include(dirname(__DIR__) . '/includes/functions.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="css/style.css">
    <title><?php
            if (defined('TITLE')) {
                print TITLE;
            } else {
                print 'My Site of Quotes';
            }
            ?>
    </title>

    <body>
        <div id="container">
            <h1>My Site of Quotes</h1> <br>
            <!-- BEGIN CHANGEABLE CONTENT. -->