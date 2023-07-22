<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Skills");

include dirname(__DIR__) . "/project3/templates/header.php"; 

if (!is_administrator()) {

	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New user? Click <a href="register.php">here</a> to register.';

	include(dirname(__DIR__).'/project3/templates/footer.php');
	exit();
}

// Skills and Description
include(dirname(__DIR__).'/project3/mysqli_connect.php');

$query = 'SELECT skill_name, description FROM skills';

try {

    if ($result = mysqli_query($dbc, $query)) {

        print "<ol>";

        while ($row = mysqli_fetch_array($result)) {

            print "<li><strong>{$row['skill_name']}:</strong>
                        <p>{$row['description']}</p>
                   </li><hr>";

        }

        print "</ol>";

    }

} catch (mysqli_sql_exception $e) {

    print '<p class="error">Could not retrieve skills data because:<br>' . mysqli_error($dbc) . '</p>';

    error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");


} finally {

    mysqli_close($dbc);

}

// Store all the images for technologies I use in an array
$technologies = [
    "images/java-logo.png",
    "images/cpp-logo.png",
    "images/js-logo.png",
    "images/php-logo.png",
    "images/mysql-logo.png",
    "images/swift-logo.png",
    "images/html5-logo.png",
    "images/css3-logo.png"
];

echo "<h3 class=\"center\">Technologies I use: </h3>";

//Display the images using a loop
echo "<table><tr>";

for ($i = 0; $i < count($technologies); $i++) {
    print "<td><img src=\"$technologies[$i]\" width=\"140\" height=\"140\"".">"."</td>";
}

echo "</tr></table>";

include dirname(__DIR__) . "/project3/templates/footer.php"; 
?>