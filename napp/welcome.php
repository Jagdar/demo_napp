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
| MODULE:           Welcome
| -----------------------------------------------------
| This is Welcome-file:
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

<?php
require_once "config.php";
 $sql = "SELECT avtar_path ,username FROM nappdb WHERE id =". $_SESSION["id"] ;

if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_row($result)) {
     $avtar_path = $row[0];
     $user_name = $row[1];
     }

}

?>
<body>
    <div class="page-header">
       <img src= <?php echo $avtar_path ?>  title = "<?php echo $user_name ?>"  width"75" height="75"/> <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>

        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="document_view.php" class="btn btn-danger">Document_view</a>
    </p>
</body>
</html>