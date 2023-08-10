<?php // Script 13.2 - functions.php
/* This page defines custom functions. */
// This function checks if the user is an administrator.
// This function takes two optional values.
// This function returns a Boolean value.
function is_administrator()
{
    // Check for the cookie and check its value:
    if (isset($_SESSION['email'])) {
        return true;
    } else {
        return false;
    }
} // End of is_administrator() function.