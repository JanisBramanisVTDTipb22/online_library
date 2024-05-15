<?php
// Initialize the session
session_start();

// Perform logout actions (destroy session, clear session data, etc.)
$_SESSION = [];
session_destroy();

// Clear session cookie
$params = session_get_cookie_params();
setcookie(session_name(), '', time() - 3600,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
);

// Redirect the user to the login page
header("Location: /login");
exit(); // Make sure to exit after the redirect
?>
