<!DOCTYPE html>
<!-- Author: Bhairavi Patel
Date: 05-23-2023 -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php
              if (!isset($title)) {
                $title = "Main";
                echo $title;
              } else {
                echo $title;
              }
            ?>
        </title>
    </head>
    <body>
      
        <?php
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
        ?>
        