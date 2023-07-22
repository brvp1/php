<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Education");

include dirname(__DIR__) . "/project3/templates/header.php";

if (!is_administrator()) {

	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New user? Click <a href="register.php">here</a> to register.';


	include(dirname(__DIR__)."/project3/templates/footer.php");
	exit();
}

print '<div>
<p class="center">Here is a list of all my schools and degrees:</p>
</div>';

include(dirname(__DIR__).'/project3/mysqli_connect.php');

$query = 'SELECT degree, school_name, start_date, end_date FROM education ORDER BY start_date DESC';

try {

    if ($result = mysqli_query($dbc, $query)) {

        print '<hr>';

        while ($row = mysqli_fetch_array($result)) {


            print "<p class=\"center\"><strong>{$row['degree']}
                    </strong> | <em>{$row['start_date']} - {$row['end_date']}</em></p>";

            print "<p class=\"center\">{$row['school_name']}</p>";

            print '<hr>';
            
        }

    }

} catch (mysqli_sql_exception $e) {

    print '<p class="error">Could not retrieve education data because:<br>' . mysqli_error($dbc) . '</p>';

    error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");

} finally {

    mysqli_close($dbc);

}

include dirname(__DIR__) . "/project3/templates/footer.php"; 
?>