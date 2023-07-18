<?php // Script 8.4 - index.php

// set the page title and include the header file
define('TITLE', 'Books by J. D. Salinger');

include(dirname(__DIR__) . '/ch8/templates/header.php');
?>

<h2>J.D. Salinger's Books</h2>
<ul>
    <li>The Catcher in the Rye</li>
    <li>Nine Stories</li>
    <li>Franny and Zooey</li>
    <li>Raise High the Roof Beam,
        Carpenters and Seymour: An
        Introduction</li>
</ul>

<?php
    include(dirname(__DIR__) . '/ch8/templates/footer.php');
?>