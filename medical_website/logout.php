<?php
session_start();

$_SESSION = [];

session_destroy();

define('TITLE', "Dolphin Physican Care | Logout");
include dirname(__DIR__) . "/medical_website/templates/boilerplate.php";
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>

<!-- logout message -->
<div class="container" style="margin: 50px; text-align: center;">
    <h2>Thank you for visiting!</h2>
    <p>You are now logged out.</p>
</div>

<!-- end logout message -->

<?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>