<?php 
include("config.php"); 
include ( "src\NexmoMessage.php" );
error_reporting(0);?>

<html>
<head>
	<?php include("reg_head.php");?>
</head>
<head>
    <link rel="stylesheet" type="text/css" href="css/logincss5.css">
	
</head>
<body>

<?php
include("reg_topnav.php");
?>
    <div class="container" style='margin-top:10px;'>
	
	
			<div class="row centered-form ">
			<center><h2><b><i class="fa fa-pencil-square-o" style="font-size:31px"></i> DONOR REGISTRATION FORM</b></h2></center><br>
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<?php
					if(isset($_POST["submit"]))
					{
						
										


$sql="
INSERT INTO blood_donor 
(fname, mname, lname, age, birthdate, gender, civil_status, contact, address, email, nationality, occupation, blood_type, status)
 VALUES 
 ('{$_POST["fname"]}', '{$_POST["mname"]}', '{$_POST["lname"]}', '{$_POST["age"]}' , '{$_POST["birthdate"]}' ,
 '{$_POST["gender"]}' , '{$_POST["civil_status"]}' , '{$_POST["contact"]}' , '{$_POST["address"]}' , 
 '{$_POST["email"]}' , '{$_POST["nationality"]}' , '{$_POST["occupation"]}', 
 '{$_POST["blood_type"]}','1' );";
$number='+63'. $_POST["contact"];
$name=$_POST["fname"]." ".$_POST["mname"]." ".$_POST["lname"];
 
					if($con->query($sql))
					{
						
                    if($_POST['gender']=="Male"){
                    $msg="Hello! Mr." . $name .".  Thank you for your registration. Please Visit Bicol Regional Blood Center for the Examination.";	
                    }else{
                    	$msg="Hello! Ms." . $name . ". Thank you for your registration. Please Visit Bicol Regional Blood Center for the Examination.";
                    }
                    
$nexmo_sms = new NexmoMessage('f7466374','u3d3yjbqnsQlVPTK');
//send message using simple api params
$info = $nexmo_sms->sendText( $number, 'blood', $msg );
$nexmo_sms->displayOverview($info);	
								echo "<script>alert('Successfully Registered. A text confirmation will be sent shortly.'); location.href='guide.php'</script>";
					}
					}
?>
   		<div class="panel panel-primary">
                    <div class="panel-body">
						<form method="post" action="donor_reg.php" autocomplete="off" role="form" enctype="multipart/form-data">
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
						
						<div class="control-group form-group">
                        <div class="controls">
                            <label>Contact Number:</label>
                            <input type="contact" class="form-control" name="contact" placeholder="Enter your Contact Number" required>
                        </div>
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
						
						<h4 class="text-primary"><b>Disclaimer:</b></h4>
						<div class="form-group">
								<label class="control-label text-success"><input type="checkbox" required="">&nbsp; I certify that I have to be the best of my knowledge and truthfully answered &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the above questions.</label> 
								
								<label class="control-label text-success"><input type="checkbox" required="">&nbsp; I certify that I am the person referred above and all the entries were read &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and understand by me and that it is of my free will and voluntary act to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;donate my blood. I am aware of its risks and consequences during and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;after extraction.</label> 
								
								
						</div>
						
						<center>
						  <div class="form-group">
							<button class="btn btn-primary btn-block type="submit" name="submit" >Sign Up Now</button>
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