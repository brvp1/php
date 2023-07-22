<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Work Experience");
include dirname(__DIR__) . "/project3/templates/header.php";

if (!is_administrator()) {

    print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New user? Click <a href="register.php">here</a> to register.';

    include(dirname(__DIR__) . '/project3/templates/footer.php');
    exit();
}
?>

<table class="center">
    <tr>
        <th>Position</th>
        <th>Company</th>
        <th>Experience</th>
        <th>Duration</th>
    </tr>
    <tr>
        <td>Web Developer</td>
        <td>Freelance</td>
        <td>Create websites for small businesses</td>
        <td>2021 - present</td>
    </tr>
    <tr>
        <td>Online Store Founder</td>
        <td>Focus One</td>
        <td>Fitness and wellness goods/ apparel store</td>
        <td>2017 - 2021</td>
    </tr>
    <tr>
        <td>Branch Manager</td>
        <td>S & P Securities</td>
        <td>Branch Manager at a financial brokerage firm</td>
        <td>2014 - 2016</td>
    </tr>
    <tr>
        <td>Marketing Associate</td>
        <td>Porsche</td>
        <td>Marketing and Event Management</td>
        <td>2013 - 2014</td>
    </tr>
</table>


<?php
include dirname(__DIR__) . "/project3/templates/footer.php";
?>