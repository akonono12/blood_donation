<?php 
$sql="SELECT * FROM donor_mssg WHERE Status=1";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$donor_mssg='<span class="badge pull-right">'.$n.' Unread</span>';
}
else
{
	$donor_mssg='';
}
?>


<?php 
$sql="SELECT * FROM hospital_mssg WHERE Status=1";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$hospital_mssg='<span class="badge pull-right">'.$n.' Unread</span>';
}
else
{
	$hospital_mssg='';
}
?>



<br>
<!--inbox icon link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<ul class="nav nav-stacked">
	<br>
	<li><a href="donor_inbox.php"><?php echo $donor_mssg;?><i style="font-size:20px" class="fa">&#xf0e0;</i>&nbsp;<b> Inbox</b></a></li>
	<li><a href="manage_view.php" ><span class="glyphicon">&#xe064;</span><b> Blood Bank</b></a></li>
	<li><a href="v_admin_donor.php"><i style="font-size:20px" class="fa">&#xf02d;</i><b> Registered Donors</b></a></li>
	<li><a href="admin_need_blood.php"><i style="font-size:20px" class="fa">&#xf1d8;</i><b> Pending Donors</b></a></li>
	<li><a href="h_inbox.php"><?php echo $hospital_mssg;?><i style="font-size:20px" class="fa">&#xf0e0;</i>&nbsp; <b>Hospital Inbox</b></a></li>
	<li><a href="Logs.php"><span class="glyphicon glyphicon-th-list"></span> <b> Logs</b></a></li>
</ul>

