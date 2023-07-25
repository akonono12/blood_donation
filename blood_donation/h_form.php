<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 <?php include"user_head.php";?>
<html>
<?php include"user_top_nav.php";?>
<title>Admin</title>
		
</body>
</html>