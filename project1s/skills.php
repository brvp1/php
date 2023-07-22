<?php
/* 
Sueda Tare
6/30/2023
COP2842
*/

// Start a session:
session_start();

// Function to check if a user is authenticated
function is_authenticated()
{
    return isset($_SESSION['username']);
}

// Check if the user is not authenticated, redirect to login page
if (!is_authenticated()) {
    header('Location: login.php');
    exit;
}
// Set the page title and include the header file:
define('TITLE', 'Skills');
include (dirname(__DIR__).'/project1/templates/header.php');
?>
<div >
<img src="images/INT37_Unit_L_Livingroom_Stage.jpg" alt="Design">
<style>
img {
            max-width: 30%;
            max-height: 30%;
        }
</style>
    </div>
     <h1>Skills</h1>
    <p>Problem Solving: Showcase your ability to identify and resolve issues that may arise during real estate transactions, such as financing challenges, property inspections, or legal complications.<br>
       Attention to Detail: Highlight your keen attention to detail when reviewing contracts, property documentation, and conducting due diligence to ensure accuracy and minimize risks.<br>
       Networking: Demonstrate your ability to build and maintain professional networks, fostering relationships with clients, fellow agents, brokers, lenders, and other industry professionals.</p>
</div>
<?php  include (dirname(__DIR__).'/project1/templates/footer.php');?>