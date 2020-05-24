<?php
/*
| -----------------------------------------------------
| PROJECT NAME:     ASSIGNMENT -1
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
| MODULE:          Database-connection
| -----------------------------------------------------
| This is DataBase-connection file:
| -----------------------------------------------------
*/

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>