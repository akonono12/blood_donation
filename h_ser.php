<?php 
include("config.php");
include("h_function.php");

if(isset($_POST["h"])&&$_POST["h"]!="")
{
	$key=$_POST["h"];
	 $sql="SELECT *, count(blood_type) as count FROM blood_bank WHERE blood_type LIKE '%".$key."%' GROUP BY blood_type";
	v_load_donor($sql,$con);
	
}
else if($_POST["h"]=="")
{
	$sql="Select * , count(blood_type) as count from blood_bank GROUP BY blood_type";
				v_load_donor($sql,$con);
}

?>



