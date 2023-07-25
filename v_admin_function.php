
<?php 
function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Blood Type</th>
				</tr>';
				
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								
								while($row=$result->fetch_assoc())
								{   if($row['gender']=="Male"){
                                         $g1="Selected";
                                         $g2="";

                               $day=date_create($row['date_donated']);
                           date_add($day,date_interval_create_from_date_string("90 days"));
                           $until=date_format($day,"Y-m-d");
								    }else{
                                         $g1="";
                                         $g2="Selected";

                               $day=date_create($row['date_donated']);
                           date_add($day,date_interval_create_from_date_string("120 days"));
                           $until=date_format($day,"Y-m-d");
								    }
									$date2=strtotime($until);
									$datess=date('Y-m-d');
	                                $datess1=strtotime($datess);
									if($date2<=$datess1){
										$dis="";
									}else{
									     $dis="disabled";	
									}

                                    if($row['civil_status']=="Single"){
                                          $cs1="Selected";
                                          $cs2="";
                                          $cs3="";
                                          $cs4="";
                                          $cs5="";
                                    }elseif($row['civil_status']=="Married"){
                                    	$cs1="";
                                          $cs2="Selected";
                                          $cs3="";
                                          $cs4="";
                                          $cs5="";

                                    }elseif($row['civil_status']=="Widowed"){
                                    	$cs1="";
                                          $cs2="";
                                          $cs3="Selected";
                                          $cs4="";
                                          $cs5="";
                                    	
                                    }elseif($row['civil_status']=="Divorced"){
                                    	$cs1="";
                                          $cs2="";
                                          $cs3="";
                                          $cs4="Selected";
                                          $cs5="";
                                    	
                                    }elseif($row['civil_status']=="Separated"){
                                    	$cs1="";
                                          $cs2="";
                                          $cs3="";
                                          $cs4="";
                                          $cs5="Selected";
                                    	
                                   }
                                     if($row['examresult'] == "1"){
                                        $es1="Selected";
                                        $es2="";
                                     }else{
                                        $es1="";
                                        $es2="Selected";
                                     }

									$n++;
									echo "<tr>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['lname']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['blood_type']."</td>";
									if($row['status']=='1'){
									echo "<td><a href='admin_view_request.php?id=".$row['donor_id']."' class='btn btn-primary btn-block'> View Profile</a></td>";
						             echo '<td><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit'.$row['donor_id'].'"> Edit</button></td>';
									}else{
									echo "<td><a href='admin_view_donor.php?id=".$row['donor_id']."' class='btn btn-primary btn-block'> View Profile</a></td>";
						             echo '<td><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#update'.$row['donor_id'].'"> Result</button></td>';
									}
									echo "</tr>";

   echo '  <div class="modal fade" id="update'.$row['donor_id'].'" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Result</h4>
        </div>
        <div class="modal-body">
          <form method="post" >
			<div class="form-group">
				<label for="STATUS">Blood Examination Result</label>
				<select name="Exrelts" required=""   class="form-control">
					<option value="">Select Exam Status</option>
					<option value="1" '.$es1.'>Passed</option>
				
					<option value="2" '.$es2.'>Failed</option>
				</select>
			</div>
			<div class="form-group">
			<label for="STATUS">Last Donated</label> 
			<input type="text" readonly="enabled" class="form-control input-sm" value="'.$row['date_donated'].'"/>
			</div>
			 <h6 align="Left"><b>Information:</b></h6>
 <ol>
  <li>3 months donating time for male </li>
  <li>4 months donating time for female </li>
  </ol>
	<div class="form-group">
	<label for="STATUS">Next Donation</label> 
	<input type="text" readonly="enabled" class="form-control input-sm" name="ndont" value="'.$until.'"/>
	</div>	
		<div class="form-group">
							
								<input type="hidden" name="dnid"   value="'.$row['donor_id'].'" required class="form-control input-sm">
                        </div>	
	<button type="submit" class="btn btn-primary " '.$dis.' name="update">Update</button>
			
		</form>
            </div>
        </div>
      
      </div>
      
    </div>
  </div>';



     echo '  <div class="modal fade" id="edit'.$row['donor_id'].'" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profile</h4>
        </div>
        <div class="modal-body">
          <div class="panel panel-primary">
                    <div class="panel-body">
						<form method="post"   autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label  for="fname" >First Name</label>
							<input type="text" placeholder="Enter your First Name" id="fname" name="fname"  value="'.$row['fname'].'" required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label  for="mname" >Middle Name</label>
							<input type="text" placeholder="Enter your Middle Name" id="mname" name="mname" value="'.$row['mname'].'" required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label  for="lname" >Last Name</label>
							<input type="text" placeholder="Enter your Last Name" id="lname" name="lname" value="'.$row['lname'].'" required class="form-control input-sm">
						</div>
						
						<div class="form-group">
								<label  for="age" >Age</label>
								<input type="text" placeholder="Enter your Age" id="lname" name="age" value="'.$row['age'].'" required class="form-control input-sm">
                        </div>
						
						<div class="form-group">
							<label  for="birthdate">Birthdate</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="birthdate" name="birthdate"  value="'.$row['birthdate'].'" class="form-control input-sm DATES">
						</div>
						  
						<div class="form-group">
							<label   for="gender">Gender</label>
								<select id="gender" name="gender" required class="form-control input-sm">
									<option value="">Select your Gender</option>
									<option value="Male" '.$g1.' >Male</option>
									<option value="Female"'.$g2.'>Female</option>
								</select>
						</div>
						
						<div class="form-group">
							<label  for="blood_type" >Blood Type</label>
						<select id="blood_type" name="blood_type" required class="form-control input-sm">	
							<option value="'.$row['blood_type'].'">'.$row['blood_type'].'</option>
							<option value="A+" >A+</option>
							<option value="A-" >A-</option>
							<option value="B+" >B+</option>
							<option value="B-" >B-</option>
							<option value="O+" >O+</option>
							<option value="O-" >O-</option>
							<option value="AB+" >AB+</option>
							<option value="AB-" >AB-</option>
							<option value="A1+" >A1+</option>
							<option value="A1-" >A1-</option>
							<option value="A2+" >A2+</option>
							<option value="A2-" >A2-</option>
							<option value="A1B+" >A1B+</option>
							<option value="A1B-" >A1B-</option>
							<option value="A2B+" >A2B+</option>
							<option value="A2B-" >A2B-</option>
							</select>
						</div>
						
						<div class="form-group">
							<label   for="civil_status">Civil Status</label>
								<select id="civil_status" name="civil_status" required class="form-control input-sm">
									<option value="">Select Civil Status</option>
									<option value="Single" '.$cs1.'>Single</option>
									<option value="Married" '.$cs2.'>Married</option>
									<option value="Widowed" '.$cs3.'>Widowed</option>
									<option value="Divorced" '.$cs4.'>Divorced</option>
									<option value="Separated" '.$cs5.'>Separated</option>
								</select>
						</div>
						
						<div class="control-group form-group">
                        <div class="controls">
                            <label>Contact Number:</label>
                            <input type="contact" class="form-control" name="contact" placeholder="Enter your Contact Number" value="'.$row['contact'].'" required>
                        </div>
                    </div>
						  
						<div class="form-group">
								<label  for="address">Address</label>
                                <textarea required name="address" id="address"  style="resize:none;"class="form-control" placeholder="Enter your Complete Address">'.$row['address'].'</textarea>
                        </div>
					
						<div class="form-group">
								<label  for="email" >Email Address</label>
                                <input type="email"  required name="email" id="email" class="form-control" placeholder="Enter your Email Address" value="'.$row['email'].'">
                        </div>
						
						<div class="form-group">
								<label  for="nationality" >Nationality</label>
								<input type="text" placeholder="Enter your Nationality" id="nationality" name="nationality"  value="'.$row['nationality'].'" required class="form-control input-sm">
                        </div>
						
						<div class="form-group">
								<label  for="occupation" >Occupation</label>
								<input type="text" placeholder="Enter your Occupation" id="occupation" name="occupation"   value="'.$row['occupation'].'" required class="form-control input-sm">
                        </div>
						 	<div class="form-group">
							
								<input type="hidden" name="did"   value="'.$row['donor_id'].'" required class="form-control input-sm">
                        </div>
						
						
						<center>
						  <div class="form-group">
							<button class="btn btn-primary btn-block type="submit" name="Save" >Save</button>
						  </div>
						</center>
						 </form>
                    </div>
            </div>
        </div>
      
      </div>
      
    </div>
  </div>';

								}
							}
			echo'</table>';




if(isset($_POST['Save'])){
	$id=$_POST['did'];
	$fname=$_POST['fname'];
	$mname=$_POST["mname"];
	$upd=$con->query("UPDATE `blood_donor` SET
	 fname='$fname',
	 `mname`='$mname',
	 `lname`='{$_POST["lname"]}',
	 `age`='{$_POST["age"]}',
	 `birthdate`='{$_POST["birthdate"]}',
	 `gender`='{$_POST["gender"]}',
	 `civil_status`='{$_POST["civil_status"]}',
	 `contact`='{$_POST["contact"]}',
	 `address`='{$_POST["address"]}',
	 `email`='{$_POST["email"]}',
	 `nationality`='{$_POST["nationality"]}',
	 `occupation`='{$_POST["occupation"]}',
	 `blood_type`='{$_POST["blood_type"]}'WHERE `donor_id` ='$id' ");
	if($upd){
		echo "<script>alert('Successfully Updated'); location.href='admin_need_blood.php'</script>";
	}
}
if(isset($_POST['update'])){
$id=$_POST['dnid'];
if($_POST['Exrelts'] == '1'){
$upd=$con->query("UPDATE `blood_donor` SET
	
	 `examresult`='$_POST[Exrelts]', date_donated='$_POST[ndont]' WHERE `donor_id` ='$id' ");
	if($upd){
		
    $sqls="SELECT * FROM blood_donor WHERE donor_id=".$id;
			        $results=$con->query($sqls);
		            $rowss=$results->fetch_assoc();
					$name=$rowss["fname"].$rowss["mname"].$rowss["lname"];
					$btype=$rowss['blood_type'];
				$date=$_POST['ndont'];
				 $day=date_create($date);
                 date_add($day,date_interval_create_from_date_string("42 days"));
                 $expired=date_format($day,"Y-m-d");
					$add=$con->query("INSERT INTO blood_bank (blood_type, date_of_blood, name,date_expiration) VALUES ('$btype','$date','$name','$expired')");
					if($add){
						echo "<script>alert('Successfully Updated'); location.href='v_admin_donor.php'</script>";
					}

		
	}
}else{
	$upds=$con->query("UPDATE `blood_donor` SET
	
	 `examresult`='$_POST[Exrelts]' WHERE `donor_id` ='$id' ");
	if($upds){
		echo "<script>alert('Successfully Updated '); location.href='v_admin_donor.php'</script>";
	}
}

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>



</body>
</html>
