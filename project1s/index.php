<?php
/* 
Sueda Tare
06/30/2023
COP2842
*/


// Set the page title and include the header file:
define('TITLE', 'Home');
include (dirname(__DIR__).'/project1/templates/header.php');
// Print a greeting:
print '<h2>Welcome to my webiste </h2>';

if (isset($_SESSION['username'])) 
{
    session_start();
    print "Hey there, " . $_SESSION['username'] . "!";

    echo '<p><a href="logout.php">Logout</a></p>';
}

?>	


<img src="images/INT37_Unit_L_Livingroom_Stage.jpg" alt="Design">
<style>
img {
            max-width: 30%;
            max-height: 30%;
        }
</style>
    </div>
     <h1>About Me</h1>
    <p>Hello, my name is Sueda Tare, and I am a licensed realtor specializing in Miami. With 2 years of experience in the real estate industry, I am dedicated to providing exceptional service to my clients.</p>
</div>


<?php include (dirname(__DIR__).'/project1/templates/footer.php');?>