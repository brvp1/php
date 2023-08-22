<?php

function is_registered()
{    
    if (isset($_SESSION['email'])) {
        return true;
    } else {
        return false;
    }
} // end is_registered()

?>