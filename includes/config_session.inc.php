<?php
/* ----------------------------------------------------------------------------- 

this code ensures that sessions are managed securely by using cookies, regenerating session IDs periodically, and enforcing strict session mode.



/* -----------------------------------------------------------------------------
1. Setting Session Configuration:
    ini_set('session.use_only_cookies', 1);: This line sets the PHP configuration option to use only cookies for session management. 
    This is a security measure to prevent session fixation attacks.
    
    ini_set('session.use_strict_mode', 1);: This line sets the PHP configuration option to use strict session mode. In strict mode, PHP only accepts session IDs generated by the session module and rejects any session IDs supplied by the client.*/

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);



/* -----------------------------------------------------------------------------
    Setting Session Cookie Parameters:
        session_set_cookie_params([...]);: This function sets the parameters for the session cookie. In this case, the cookie is set to expire after 1800 seconds (30 minutes), restricted to the 'localhost' domain, accessible from all paths ('/'), and marked as secure and HTTP-only. */

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);



/* ----------------------------------------------------------------------------- 
    Starting a Session:
        session_start();: This function starts or resumes a session. It must be called before any output is sent to the browser.  */

session_start();



/* ----------------------------------------------------------------------------- 
    Regenerating Session ID:
        if (!isset($_SESSION["last_regeneration"])) { regenerate(); }: This condition checks if the session variable "last_regeneration" is not set (presumably, the first time the session is started) and calls the regenerate() function to regenerate the session ID and set "last_regeneration" to the current time.

        else { ... }: If "last_regeneration" is set, the code checks if 30 minutes have passed since the last regeneration. If so, it calls regenerate() to regenerate the session ID and update "last_regeneration" with the current time. */


if (!isset($_SESSION["last_regeneration"])) {
    regenerate();
}
else {
    $interval = 60*30;
    if ((time() - $_SESSION["last_regeneration"]) >= $interval) 
    {
        regenerate();
    }
}


/* -----------------------------------------------------------------------------
    Regenerate Function:
        function regenerate() { ... }: This function regenerates the session ID using session_regenerate_id() and updates the "last_regeneration" session variable with the current time using $_SESSION["last_regeneration"] = time();. */
function regenerate() {
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}