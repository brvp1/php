<?php
/*
Author: Bhairavi Patel
Date: 06/23/2023
*/

define('TITLE', 'Home');
define('HEADLINE', 'Welcome to MDC Issue Tracking System');
include(dirname(__DIR__) . '/assignment4/templates/header.php');

print '<h3 class="text--center">
        The issue tracker for MDC and other MDC web sites.
      </h3>';


include(dirname(__DIR__) . '/assignment4/templates/footer.php');
?>