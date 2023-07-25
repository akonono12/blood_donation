<?php 
include("config.php");
include("manage_function.php");

if(isset($_POST["mb"])&&$_POST["mb"]!="")
{
	$key=$_POST["mb"];
	 $sql="SELECT * FROM manage_blood WHERE blood_unit LIKE '%".$key."%' OR D_of_B LIKE '%".$key."%'";
	v_load_donor($sql,$con);
	
}
else if($_POST["mb"]=="")
{
	$sql="Select * from manage_blood";
				v_load_donor($sql,$con);
}

?>



