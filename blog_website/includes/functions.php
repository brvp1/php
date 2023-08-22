<?php

function is_administrator() {

    if (isset($_SESSION['email'])) {
        return true;
    } else {
        return false;
    }

}

?>