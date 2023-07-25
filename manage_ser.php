<?php 
include("config.php");
include("manage_function.php");

if(isset($_POST["mb"])&&$_POST["mb"]!="")
{
	$key=$_POST["mb"];
	 $sql="SELECT * FROM blood_bank WHERE blood_type LIKE '%".$key."%' ";
	v_load_donor($sql,$con);
	
}
else if($_POST["mb"]=="")
{
	$sql="Select * from blood_bank";
				v_load_donor($sql,$con);
}

?>



