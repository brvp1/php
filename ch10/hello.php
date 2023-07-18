<?php

// include header.php
// dirname(__DIR__) = '/var/www/html/'
// full path should be: '/var/www/html/ch10/templates/header.php'
define("TITLE", "Hello");
include dirname(__DIR__) . '/ch10/templates/header.php';
?>





<?php include dirname(__DIR__) . '/ch10/templates/footer.php'; ?>