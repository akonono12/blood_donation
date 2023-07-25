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
	 echo $sql="DELETE FROM blood_donor WHERE D_id=$id";
	 $con->query($sql);
	 header("location:manage_blood.php?mes=Details Deleted");
 }
 
?>