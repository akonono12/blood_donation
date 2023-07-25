<?php
session_start();
include("config.php");
include ( "src\NexmoMessage.php" );
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: brbc_login_form.php");
    exit;
}
?>
<html>
	<head>
			<?php include("pending_donor_head.php");?>
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
		
			if(isset($_POST["submit"]))
			{
				$id=$_GET['id'];
				
				$status=$_POST["STATUS"];
				
			
				$date=date('Y-m-d');
		   $sql="UPDATE blood_donor SET status='$status',examresult='$_POST[Exrelt]',date_donated='$date' WHERE donor_id='$id'";
				if($con->query($sql))
				{if($_POST['STATUS']=='2'){
			
			
					$sqls="SELECT * FROM blood_donor WHERE donor_id=".$_GET["id"];
			        $results=$con->query($sqls);
		            $rowss=$results->fetch_assoc();
					$name=$rowss["fname"].$rowss["mname"].$rowss["lname"];
					$btype=$rowss['blood_type'];
				$date=date('Y-m-d');
				 $day=date_create($date);
                 date_add($day,date_interval_create_from_date_string("42 days"));
                 $expired=date_format($day,"Y-m-d");
					$add=$con->query("INSERT INTO blood_bank (blood_type, date_of_blood, name,date_expiration) VALUES ('$btype','$date','$name','$expired')");
					if($add){
                 
               

                   header('location:admin_need_blood.php');
					}
		  }else{
		  	 header('location:admin_need_blood.php');
		  }
		}
			
			
			}
			
		
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
				</div>
	
			<tr>
				<th>Status:</th>
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
		</table><br></div>
	
		<div class="col-md-6">
		<br><h3><b>Update</b></h3>
		<br>
		<?php if(isset($s)){echo $s;}?>
		<form method='post' action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET["id"];?>">
			<div class="form-group">
				<label for="STATUS">Exam Result</label>
				<select name="Exrelt" required=""   class="form-control">
					<option value="">Select Exam Status</option>
					<option value="1">Passed</option>
				
					<option value="2">Failed</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="STATUS">Status</label>
				<select name="STATUS" required  id="STATUS" class="form-control">
					<option value="">Select Status</option>
					<option value="3">Not Completed</option>
				
					<option value="2">Completed</option>
				</select>
			</div>
			<button type='submit' class='btn btn-primary ' name='submit'>Update</button>
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
  

	</body>
</html>