<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Predefined Variables</title>
    </head>
    <body> 
        <pre>
            <?php // Script 2.1 - predefined.php
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);

            // show the value of the $_SERVER
            print_r($_SERVER);


            ?>
        </pre>
    </body>
</html>