<?php
include("config.php");
$delete=$con->query("Select * from blood_bank");
while($row=$delete->fetch_assoc()){

	$date1=strtotime($row['date_expiration']);
	$date=date('Y-m-d');
	$date2=strtotime($date);
	$id=$row['blood_id'];
	if($date1<=$date2){
		$delete=$con->query("Delete * from blood_bank where blood_id = '$id'");
	}
}   

?>