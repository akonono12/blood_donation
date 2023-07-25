<?php
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>

<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px' >
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		
		<div class="col-sm-9" >
			<center><h3> Blood Management</h3> </center>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
			<?php
					if(isset($_POST["submit"]))
					{
									


$sql="
INSERT INTO manage_blood 
(blood_unit,  B_Type, Status,  D_of_B, Name)
 VALUES 
 ('{$_POST["blood_unit"]}',  '{$_POST["B_Type"]}' , '{$_POST["Status"]}' , '{$_POST["D_of_B"]}' , '{$_POST["Name"]}'  );";
	
						if($con->query($sql))
							{
								echo '
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<center>Successfully Added.</center>
								</div>
								';
							}
					}
				?>
   		
                    <div class="panel-body">
						<form method="post" action="admin_manage_blood.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label  for="Name" >Full Name</label>
							<input type="text" placeholder="Enter your Complete Name..." id="Name" name="Name"  required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label  for="blood_unit" >Unit</label>
							<input type="text" placeholder="Enter Blood Unit..." id="blood_unit" name="blood_unit"  required class="form-control input-sm">
						</div>
						
						
						
						<div class="form-group">
							<label  for="B_Type" >Blood Group</label>
						<select id="blood" name="B_Type" required class="form-control input-sm">	
							<option value="">Select your Blood Type</option>
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="O+">O+</option>
							<option value="AB+">AB+</option>
							<option value="A1+">A1+</option>
							<option value="A2+">A2+</option>
							<option value="A1B+">A1B+</option>
							<option value="A2B+">A2B+</option>
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="O-">O-</option>
							<option value="AB-">AB-</option>
							<option value="A1-">A1-</option>
							<option value="A2-">A2-</option>
							<option value="A1B">A1B-</option>
							<option value="A2B">A2B-</option>
							</select>
						</div>
						
						<div class="form-group">
							<label   for="Status">Status</label>
								<select id="Status" name="Status" required class="form-control input-sm">
									<option value="">Select Blood Status</option>
									<option value="Available">Available</option>
									<option value=" Not Available">Not Available</option>
								</select>
						</div>
						
						
						<div class="form-group">
							<label  for="D_of_B">Date</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="D_of_B" name="D_of_B"  class="form-control input-sm DATES">
						</div>
						
						
						<center>
						  <div class="form-group">
							<button class="btn btn-primary btn-block type="submit" name="submit" >ADD</button>
						  </div>
						</center>
						 </form>
                    </div><br><br><br><br>
				
	</div>	
	</div>	
	</div>	

 <?php include("footer.php"); ?>	
 
 
 
  
	</body>
</html>