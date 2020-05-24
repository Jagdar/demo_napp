<?php
/*
| -----------------------------------------------------
| PRODUCT NAME:     ASSIGNMENT -1
| -----------------------------------------------------
| AUTHER:           MANISH KUMAR
| -----------------------------------------------------
| EMAIL:            manishkumar7719989@gmail.com
| -----------------------------------------------------
| COPYRIGHTS:       @Navigus
| -----------------------------------------------------
| WEBSITE:          http://www.navigus.com
| -----------------------------------------------------
|
| MODULE:           Logout
| -----------------------------------------------------
| This is Logout- file:
| -----------------------------------------------------
*/



// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;
?>