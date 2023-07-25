
<?php 
$sql="SELECT * FROM d_mssg WHERE Status=1";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$d_mssg=''.$n.'';
}
else
{
	$d_mssg="";
}
?>
<br>
<!--inbox icon link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="nav">
	<li><a href="Donor_inbox.php"><?php echo $d_mssg;?><i class="fa fa-envelope-o" style="font-size:20px;color:red"></i>Donor Inbox </a></li>
	<li><a href="manage_blood.php">Manage Blood List</a></li>
	<li><a href="v_admin_donor.php">Blood Donor Information</a></li>
	<li><a href="admin_need_blood.php"> Pending Donor Request </a></li>
	<li><a href="h_register.php">Signup form Hospital</a></li>
	

</ul>
