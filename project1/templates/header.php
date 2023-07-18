<!DOCTYPE html>
<html lang="en">
<!-- Author: Bhairavi Patel
    Date: 06/03/2023 -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project1/css/style.css">
    <title>
        <?php
        // Set title
        if (!isset($title)) {
            $title = "Main";
            echo $title;
        } else {
            echo $title;
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
                "Work Experience" => "work_experience.php"
            ];
            echo "<table class=\"menu\"><tr>";

            echo '<a href="/project1/home.php"><img src="images/logo.png" width="80" height="50"></a>';

            foreach ($menu_items as $menu_item => $page) {
                echo "<td><a href=\"$page\">".$menu_item."</a>"."</td>";
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