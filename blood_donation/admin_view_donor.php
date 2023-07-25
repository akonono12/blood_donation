<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h2>Registered Donor Information </h2><br>
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
				
				<tr>
				<th>Type of Donor</th>
				<td><?php echo $row["donor_type"];?></td>
				</tr>
			
				</table>
				</div>
	
			<tr>
				<th>Status</th>
				<td><?php 
				if($row["status"]==0)
				{
					echo "<b>Pending</b>";
				}
				else if($row["status"]==1)
				{
					echo "<b>Not Completed</b>";
				}	
				else if($row["status"]==2)
				{
					echo "<b>Completed</b>";
				}
					
					
					?></td>
			</tr>
		</table><br>
		</div>
		<div class="col-md-6">
		<h3>Update</h3>
		<br>
		<?php if(isset($s)){echo $s;}?>
		<form method='post' action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET["id"];?>">
			
			<div class="form-group">
				<label for="status">Status</label>
				<select name="status" required  id="status" class="form-control">
					<option value="">Select Status</option>
					<option value="0">Pending</option>
					<option value="1">Not Completed</option>
					<option value="2">Completed</option>
				</select>
			</div>
			<button type='submit' class='btn btn-primary ' name='submit'> Update</button>
			<a href='admin_need_blood.php' class='btn btn-primary '>Back</a>
		</form>
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