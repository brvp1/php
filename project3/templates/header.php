<?php
    ob_start();
    session_start();
    include(dirname(__DIR__) . '/includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Author: Bhairavi Patel
    Date: 06/03/2023 -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project3/css/style.css" type="text/css">
    <title>
        <?php
        // Set title
        if (defined('TITLE')) {
            print TITLE;
        } else {
            print "Main";
        }
        ?> 
    </title>
    <header>
        <?php
        // Display menu
            $menu_items = [
                "Home" => "home.php",
                "Education" => "education.php",
                "Licenses & Certifications" => "licenses.php",
                "Skills" => "skills.php",
                "Interests" => "interests.php",
                "Work Experience" => "work_experience.php",
                "Register" => "register.php",
                "Login" => "login.php"
            ];
            echo "<table class=\"menu\"><tr>";

            echo '<a href="/project3/home.php"><img src="images/logo.png" width="80" height="50"></a>';

            foreach ($menu_items as $menu_item => $page) {
                echo "<td><a href=\"$page\">" . $menu_item . "</a>"."</td>";
            }

            echo "</tr></table>";
        ?>
    </header>
</head>

<body>
    <?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    ?>

<h1 class="text--center">
        <?php 
            if (defined('TITLE')) {
                print TITLE;
            } else {
                print 'Welcome to my website!';
            }
        ?>
</h1>