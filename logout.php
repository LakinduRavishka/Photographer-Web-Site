<?php
session_start(); // Start the session

// Destroy the session and log the user out
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the homepage or login page after logout
header("Location: Home.php");
exit();
?>
