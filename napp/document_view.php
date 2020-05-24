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
| MODULE:           Document_view
| -----------------------------------------------------
| This is Document_view file:
| -----------------------------------------------------
*/ 



// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">*/!-->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
   <a href="welcome.php" class="btn btn-danger">Welcome Page</a>
  
   <a href="document_view.php" class="btn btn-danger">Document View Page</a>
     <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    <div class="page-header">
        <img src="images/a.png" alt = "manish" width="75" height="75"/><h1> Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?>...</b></h1>
        <?php echo htmlspecialchars($_SESSION["avtar_path"]); ?>
    </div>
    <p>
        
       <h1> ABOUT-COMPANY </h1>
 <img src="images/about_com.png">
    </p>
</body>
</html>