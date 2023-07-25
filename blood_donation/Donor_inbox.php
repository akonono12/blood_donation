<?php
session_start();
include("config.php");
 
?>

<html>
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h2> Donor Messages </h2></center>
			<br>
			<br>
			<br>
			
<?php 
$sql="SELECT * FROM d_mssg ORDER BY ID DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{
			if($row['Status']=='1')
			{
				echo '<a href="D_view_mess.php?id='.$row['id'].'" class="btn btn-danger btn-xs">View</a>
						<span   class="pull-right">
							'.$row['Logs'].'
							
						</span>
					 '.$row["Name"].' :&nbsp; '.substr($row["Message"],0,50).'....
							
						</span>
						

					';
			}
			else
			{
				echo '<a href="D_view_mess.php?id='.$row['id'].'" class="btn btn-danger btn-xs">View</a>
						<span   class="pull-right">
							'.$row['Logs'].'
						</span>
					 '.$row["Name"].' :&nbsp; '.substr($row["Message"],0,50).'....
							
						</span>
						

					';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No Messages from Donors</div>";
}

					
					
					
					
					
					
					?>
		
		</div>
	</div>
</div>
	
	</body>
</html>