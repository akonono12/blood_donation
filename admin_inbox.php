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
<div class="container"  style='margin-top:40px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h2> Messages </h2></center>
			<br>
			<br>
			<br>
			
<?php 
$sql="SELECT * FROM messages ORDER BY ID DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{
			if($row['STATUS']=='1')
			{
				echo '<span>
							<b>	'.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span   class="pull-right">
							
							<a href="view_mess.php?id='.$row['ID'].'" class="btn btn-primary btn-block">View</a>				
							<i>'.$row['LOGS'].'</i>&nbsp;
						</span>
						<br><br>
						<br>

					</li>';
			}
			else
			{
				echo '	<span>
							
</i> '.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....

						</span>
						<span   class="pull-right">	
							<a href="view_mess.php?id='.$row['ID'].'" class="btn btn-primary btn-block">View</a>
							<i>'.$row['LOGS'].'</i>&nbsp;
						</span>
						<br><br>
						<br>
				</li>';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Messages</div>";
}

					
					
					
					
					
					
					?>
		
		</div>
	</div>
</div>
	
	</body>
</html>