<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 $id=$_POST["id"];
 $ldate=$_POST["ldata"];
 echo $sql="UPDATE manage_blood SET status='{$ldate}' WHERE  b_id='{$id}'";
 $con->query($sql);
 header("location:view_blood.php?id={$id}");
 
?>