<?php
session_start();
include("config.php");
include("admin_function.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]  !== true) {
	header ("location: brbc_login_form.php");
	exit;
}	
?>

<html lang="en">
	<head>
			<?php include("add_blood_head.php");?>
	</head>
	<body>

<?php include("manage_topnav.php"); ?>
<div class="container"  style='margin-top:70px' >
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		
		<div class="col-sm-9" >
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
			<?php
					if(isset($_POST["submit"]))
					{
									
 $day=date_create($_POST["date_of_blood"]);
 date_add($day,date_interval_create_from_date_string("42 days"));
  $expired=date_format($day,"Y-m-d");
$sql="
INSERT INTO blood_bank 
( blood_type, date_of_blood, name,date_expiration)
 VALUES 
 ( '{$_POST["blood_type"]}' , '{$_POST["date_of_blood"]}' , '{$_POST["name"]}','$expired' );";
	
						if($con->query($sql))
							{
					echo "<script>alert('Blood Stock Successfully Added!'); location.href='manage_view.php'</script>";
				}	
					}
				?>
   		
                    <div class="panel-body">
						<form method="post" action="admin_manage_blood.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label  for="name" >Donor Full Name</label>
							<input type="text" placeholder="Enter your Complete Name..." id="name" name="name"  required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label  for="blood_type" >Blood Type</label>
						<select id="blood" name="blood_type" required class="form-control input-sm">	
							<option value="">Select Blood Type</option>
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
						
						
						<div class="form-group">
							<label  for="date_of_blood">Date Donated</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="date_of_blood" name="date_of_blood"  class="form-control input-sm DATES">
						</div>
						
						
						<br><center>
						  <div class="form-group">
							<button class="btn btn-primary btn-block type="submit" name="submit" >Add to Blood Bank</button>
						  </div>
						  <center><a href='manage_view.php' class='btn btn-primary '>Back</a></center>
						</center>
						 </form>
                    </div><br><br><br><br>
				
	</div>	
	</div>	
	</div>	

 <?php include("footer.php"); ?>	
 
 
 
  
	</body>
</html>