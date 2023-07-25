<?php
session_start();
include("config.php");
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM donor_mssg WHERE donor_mssg_id=$id";
	 $con->query($sql);
	 header("location:donor_inbox.php?mes= Message Deleted");
 }
 else
 {
	 header("location:donor_inbox.php");
 }
 
?>