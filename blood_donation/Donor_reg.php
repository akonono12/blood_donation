<?php 
include("config.php"); 
//include("functions.php"); 

error_reporting(0);?>

<html>
<head>
	<?php include("head.php");?>
</head>
<body>

<?php
include("top_nav.php");
?>
    <div class="container" style='margin-top:70px;'>
        
	
				<center><h2>Donor Registration Form</h2></a></center>
	
			<div class="row centered-form ">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<?php
					if(isset($_POST["submit"]))
					{
						
										


$sql="
INSERT INTO blood_donor 
(fname, mname, lname, age, birthdate, gender, civil_status, contact, address, email, nationality, occupation, donor_type, blood_type, status)
 VALUES 
 ('{$_POST["fname"]}', '{$_POST["mname"]}', '{$_POST["lname"]}', '{$_POST["age"]}' , '{$_POST["birthdate"]}' ,
 '{$_POST["gender"]}' , '{$_POST["civil_status"]}' , '{$_POST["contact"]}' , '{$_POST["address"]}' , 
 '{$_POST["email"]}' , '{$_POST["nationality"]}' , '{$_POST["occupation"]}' , '{$_POST["donor_type"]}' , 
 '{$_POST["blood_type"]}','status' );";
						if($con->query($sql))
							header("location:Donor_after_reg_page.php");
					}
				?>
   		
                    <div class="panel-body">
						<form method="post" action="Donor_reg.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label  for="fname" >First Name</label>
							<input type="text" placeholder="Enter your First Name" id="fname" name="fname"  required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label  for="mname" >Middle Name</label>
							<input type="text" placeholder="Enter your Middle Name" id="mname" name="mname"  required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label  for="lname" >Last Name</label>
							<input type="text" placeholder="Enter your Last Name" id="lname" name="lname"  required class="form-control input-sm">
						</div>
						
						<div class="form-group">
								<label  for="age" >Age</label>
								<input type="text" placeholder="Enter your Age" id="lname" name="age"  required class="form-control input-sm">
                        </div>
						
						<div class="form-group">
							<label  for="birthdate">Birthdate</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="birthdate" name="birthdate"  class="form-control input-sm DATES">
						</div>
						  
						<div class="form-group">
							<label   for="gender">Gender</label>
								<select id="gender" name="gender" required class="form-control input-sm">
									<option value="">Select your Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
						</div>
						
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
						
						<div class="form-group">
							<label   for="civil_status">Civil Status</label>
								<select id="civil_status" name="civil_status" required class="form-control input-sm">
									<option value="">Select Civil Status</option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Widowed">Widowed</option>
									<option value="Divorced">Divorced</option>
									<option value="Separated">Separated</option>
								</select>
						</div>
						
						<div class="form-group">
								<label  for="contact" >Contact Number</label>
								<input type="text" placeholder="Enter your Contact Number" id="contact" name="contact"  required class="form-control input-sm">
                        </div>
						  
						<div class="form-group">
								<label  for="address">Address</label>
                                <textarea required name="address" id="address"  style="resize:none;"class="form-control" placeholder="Enter your Complete Address"></textarea>
                        </div>
					
						<div class="form-group">
								<label  for="email" >Email Address</label>
                                <input type="email"  required name="email" id="email" class="form-control" placeholder="Enter your Email Address">
                        </div>
						
						<div class="form-group">
								<label  for="nationality" >Nationality</label>
								<input type="text" placeholder="Enter your Nationality" id="nationality" name="nationality"  required class="form-control input-sm">
                        </div>
						
						<div class="form-group">
								<label  for="occupation" >Occupation</label>
								<input type="text" placeholder="Enter your Occupation" id="occupation" name="occupation"  required class="form-control input-sm">
                        </div>
						
						<div class="form-group">
							<label   for="donor_type">Type of Donor</label>
								<select id="donor_type" name="donor_type" required class="form-control input-sm">
									<option value="">Select Type of Donor</option>
									<option value="New">New</option>
									<option value="Old">Old</option>
									<option value="Lapse">Lapse</option>
								</select>
						</div>
						<br>
					
						<center>
						  <div class="form-group">
							<button class="btn btn-primary btn-block type="submit" name="submit" >Register Now</button>
						  </div>
						</center>
						 </form>
                    </div>
                
            </div>
			 
            
        </div>
        
       
    </div>    

<?php include("footer.php"); ?>
 
</body>
</html>