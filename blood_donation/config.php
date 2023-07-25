<?php 

$con=new mysqli("localhost","root","","blood_donation");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>