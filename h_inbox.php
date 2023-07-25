<?php
session_start();
include("config.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: brbc_login_form.php");
    exit;
}
?>
<html>
<!-- glyphicon-trash icon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<head>
			<?php include("h_inbox_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h2></i> <i style="font-size:30px" class="fa">&#xf0e0;</i> <b>HOSPITAL BLOOD REQUEST</b></h2></center><br><br>
			
<?php 
$sql="SELECT * FROM hospital_mssg ORDER BY hospital_mssg_id DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{
			if($row['status']=='1')
			{
				echo '<li class="list-group-item">
						<span>
						<h5><b><i style="font-size:20px" class="fa">&#xf0e0;</i> '.$row["h_name"].' : '.substr($row["message"],0,50).'</b>
						</span>
						<span   class="pull-right">
							<i>'.$row['logs'].'</i>&nbsp;
							<a href="h_view_mess.php?id='.$row['hospital_mssg_id'].'" class="btn btn-primary  btn-xs">View</a>
							<a href="h_mess_del.php?id='.$row['hospital_mssg_id'].'"  class="btn btn-primary  btn-xs">Delete</a>
						</span>

					</li>';
			}
			else
			{
				echo '<li class="list-group-item">
						<span>
						<h5><b><i style="font-size:20px" class="fa">&#xf2b6;</i> '.$row["h_name"].' : '.substr($row["message"],0,50).'</b>
						</span>
						<span   class="pull-right">
							<i>'.$row['logs'].'</i>&nbsp;
							<a href="h_view_mess.php?id='.$row['hospital_mssg_id'].'" class="btn btn-primary btn-xs">View</a>
							<a href="h_mess_del.php?id='.$row['hospital_mssg_id'].'"  class="btn btn-primary btn-xs">Delete</a>
						</span>
				</li>';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<br><br><b>No Messages</b>";
}

					
?>
		
		
	
</div>
</div>
	 <?php include("admin_footer.php"); ?>
	</body>
</html>