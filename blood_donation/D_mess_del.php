<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM d_mssg WHERE id=$id";
	 $con->query($sql);
	 header("location:Donor_inbox.php?mes=Message Deleted");
 }
 else
 {
	 header("location:Donor_inbox.php");
 }
 
?>