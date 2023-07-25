<?php 
include("config.php");
include("v_admin_function.php");

if(isset($_POST["v"])&&$_POST["v"]!="")
{
	$key=$_POST["v"];
	 $sql="SELECT * FROM blood_donor WHERE fname LIKE '%".$key."%' OR lname LIKE '%".$key."%'";
	v_load_donor($sql,$con);
	
}
else if($_POST["v"]=="")
{
	$sql="Select * from blood_donor";
				v_load_donor($sql,$con);
}

?>



