<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page after logout
header("Location: login.php"); 
exit(); // Ensure no further code is executed after redirection
?>
