<?php // Script 8.4 - index.php

/* This is the home page for this site. 
It uses templates to create the layout. */

// include the header

include(dirname(__DIR__).'/ch8/templates/header.php');

?>

<h2>Welcome to a J.D. Salinger Fan Club!</h2>
<p>Lorem ipsum dolor sit amet,
  consectetur adipisicing elit, sed do eiusmod tempor 
  incididunt ut labore et dolore magna aliqua. Ut enim 
  ad minim veniam, quis nostrud exercitation ullamco 
  laboris nisi ut aliquip ex ea commodo consequat. 
  Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat Excepteur sint occaecat proident, 
  sunt in culpa deserunt mollit anim id
  nulla pariatur. cupidatat non qui officia
  est laborum.
</p>

<?php
include(dirname(__DIR__).'/ch8/templates/footer.php');
?>