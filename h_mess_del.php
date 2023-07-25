<?php
session_start();
include("config.php");
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM hospital_mssg WHERE hospital_mssg_id=$id";
	 $con->query($sql);
	 header("location:h_inbox.php?mes=Message Deleted");
 }
 else
 {
	 header("location:h_inbox.php");
 }
 
?>