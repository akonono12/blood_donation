<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
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
			<h2> Transfer Details </h2><br>
		<div class="row">
		<?php 

		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM manage_blood WHERE b_id=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
		
		<div class="col-md-8">
		<table class="table table-striped">
		<form action="" method="">
		
				<tr>
					<label  for="hospital_name" >Hospital Name</label>
						<input type="text" class="form-control" name="hospital__name" placeholder="Input Hospital Name..." required>
				</tr>
				<br>
				<tr>
				<div class="form-group">
							<label  for="blood_type" >Blood Type</label>
						<select id="blood_type" name="blood_type" required class="form-control input-sm">	
							<option value="">Select your Blood Type</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="A1+">A1+</option>
							<option value="A1-">A1-</option>
							<option value="A2+">A2+</option>
							<option value="A2-">A2-</option>
							<option value="A1B+">A1B+</option>
							<option value="A1B-">A1B-</option>
							<option value="A2B+">A2B+</option>
							<option value="A2B-">A2B-</option>
							</select>
						</div>
				</tr>

			</div>
			</table>
			<button type='submit' class='btn btn-primary ' name='submit'>Submit</button>
			
			<a href='manage_view.php' class='btn btn-primary '>Back</a>
		</form>
		</div>
		</form>
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
		</div>
		</div>
		</div>
	
	</div>
 
		<?php include("admin_footer.php"); ?>
	</body>
</html>