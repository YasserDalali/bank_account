<?php

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the main.php page after logout
    header("Location: index.php");
    exit;
