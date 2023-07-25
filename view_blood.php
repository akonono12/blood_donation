<?php
session_start();
include("config.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]  !== true) {
	header ("location: brbc_login_form.php");
	exit;
}	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("manage_head.php");?>
	</head>
	<body>

<?php include("manage_topnav.php"); ?>
<div class="container"  style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h2><b>Blood Information</b></h2><br>
		<div class="row">
		<?php 

		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM blood_bank WHERE blood_id=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
		
		<div class="col-md-8">
		<table class="table table-striped">
				<tr>
				<th>Donor Name</th>
				<td><?php echo $row["name"];?></td>
				</tr>
				
				<tr>
				<th>Blood Type</th>
				<td><?php echo $row["blood_type"];?></td>
				</tr>

				<tr>
				<th>Date Donated</th>
				<td><?php echo $row["date_of_blood"];?></td>
				</tr>
				
		
			
		</table>
		</div>
				
				<div class="col-md-6">

<?php
}
}	
else
{
echo "<script>window.open('manage_view.php','_self');</script>";
}

?>	

	
					<br>
					<center><a href='manage_view.php' class='btn btn-primary ' >Back</a></center>
			
			
			
				</div>
		</div>
	</div>
	
	</div>
 
  
	 <?php include("admin_footer.php"); ?>
  <script>
  </script>

	</body>
</html>