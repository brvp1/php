<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Education");
include dirname(__DIR__) . "/project2/templates/header.php"; 
?>

<div>
<p>Here is a list of all my schools and degrees:</p>
</div>

<table class="center">
    <tr>
        <th>College/ University</th>
        <th>Program</th>
        <th>Year</th>
    </tr>
    <tr>
        <td>Miami Dade College</td>
        <td>Associate of Science - Computer Programming (Mobile App Developement)</td>
        <td>2021 - Present</td>
    </tr>
    <tr>
        <td>University of Mumbai</td>
        <td>Master of Business Administration</td>
        <td>2013 - 2015</td>
    </tr>
    <tr>
        <td>University of Mumbai</td>
        <td>Bachelor of Management Studies</td>
        <td>2009 - 2012</td>
    </tr>
</table>

<?php
include dirname(__DIR__) . "/project2/templates/footer.php"; 
?>