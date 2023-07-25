<?php 
include("config.php");
include("manage_blood_function.php");

if(isset($_POST["n"])&&$_POST["n"]!="")
{
	$key=$_POST["n"];
	 $sql="SELECT * FROM blood_donor WHERE Unit LIKE '%".$key."%' OR B_Type LIKE '%".$key."%' OR D_of_B LIKE '%".$key."%'";
	load_manage_blood($sql,$con);
	
}
else if($_POST["n"]=="")
{
	$sql="Select * from blood_donor";
				load_manage_blood($sql,$con);
}

?>



