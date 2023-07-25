<?php
session_start();
include("config.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: brbc_login_form.php");
    exit;
}
?>
<!DOCTYPE html>
	<head>
			<?php include("reg_donor_info_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h2><b>Donor Information</b></h2><br>
		<div class="row">
		
		<?php
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM blood_donor WHERE donor_id=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
		
		<div class="col-md-8">
		<table class="table table-striped">
				<tr>
				<th>First Name</th>
				<td><?php echo $row["fname"];?></td>
				</tr>
				
				<tr>
				<th>Middle Name</th>
				<td><?php echo $row["mname"];?></td>
				</tr>
				
				<tr>
				<th>Last Name</th>
				<td><?php echo $row["lname"];?></td>
				</tr>
				
				<tr>
				<th>Age</th>
				<td><?php echo $row["age"];?></td>
				</tr>
				
				<tr>
				<th>Birthdate</th>
				<td><?php echo $row["birthdate"];?></td>
				</tr>
				
				<tr>
				<th>Gender</th>
				<td><?php echo $row["gender"];?></td>
				</tr>
				
				<tr>
				<th>Blood Type</th>
				<td><?php echo $row["blood_type"];?></td>
				</tr>
				
				<tr>
				<th>Civil Status</th>
				<td><?php echo $row["civil_status"];?></td>
				</tr>
				
				<tr>
				<th>Contact Number</th>
				<td><?php echo $row["contact"];?></td>
				</tr>
				
				<tr>
				<th>Address</th>
				<td><?php echo $row["address"];?></td>
				</tr>
				
				<tr>
				<th>Email</th>
				<td><?php echo $row["email"];?></td>
				</tr>
				
				<tr>
				<th>Nationality</th>
				<td><?php echo $row["nationality"];?></td>
				</tr>
				
				<tr>
				<th>Occupation</th>
				<td><?php echo $row["occupation"];?></td>
				</tr>
			
		</table>
				<br><br><center><a href='v_admin_donor.php' class='btn btn-primary '>Back</a></center></br></br>
		</div>
				
	
			<tr>
				<b><th>Status:</th></b>
				<td><?php 
				if($row["status"]==1)
				{
					echo "<b>Pending</b>";
				}
				else if($row["status"]==2)
				{
					echo "<b>Registered</b>";
				}
					
					
					?></td>
			</tr>
		</table><br>
		</div>
		
		
		
		
		
		
				<?php
				}
				}	
				else
				{
				echo "<script>window.open('admin_donor.php','_self');</script>";
				}

				?>	
			
			
			
			
			
			
			
		</div>
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  <script>
  </script>

	</body>