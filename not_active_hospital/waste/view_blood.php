<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<html>
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
			<h3>Blood  Information</h3><br>
		<div class="row">
		<?php 
		
			if(isset($_POST["submit"]))
			{
				$id=$_GET['B_id'];
				$d_of_b=$_POST["D_of_B"];
				$status=$_POST["Status"];
				if($d_of_b=="")
				{
					$d_of_b="0000-00-00";
					$status=1;
				}
			$sql="UPDATE manage SET D_of_B='{$d_of_b}',Status='{$status}' WHERE B_id='{$id}'";
				if($con->query($sql))
				{
					
					$s= "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success : </strong> Status Updated Success.</div>";
				}
			
			}
			
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM manage_blood WHERE B_id=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
		
		<div class="col-md-8">
		<table class="table table-striped">
				
				<tr>
				<th>B_type</th>
				<td><?php echo $row["B_Type"];?></td>
				</tr>
				
				
				<tr>
				<th>Status</th>
				<td><?php 
				if($row["Status"]==0)
				{
					echo "<b>Not Available</b>";
				}
				else if($row["Status"]==1)
				{
					echo "<b>Available</b>";
				}	
				else if($row["Status"]==2)
				
					
					
					?></td>
			</tr>
			<tr>
				<th>Date</th>
				<td><?php echo $row["D_of_B"];?></td>
			</tr>
				
				
				
			
				</table>
				</div>
				<div class="col-md-6">
		<h3>Update</h3>
		<br>
		<?php if(isset($s)){echo $s;}?>
		<form method='post' action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET["id"];?>">
			<div class="form-group">
				<label for="D_of_B"> Date </label>
				<input type="text" name="D_of_B"  id="D_of_B" class="form-control DATES">
			</div>
			
			<div class="form-group">
				<label for="Status">Status</label>
				<select name="Status" required  id="Status" class="form-control">
					<option value="">Select Status</option>
					<option value="0">Not Available</option>
					<option value="1">Available</option>
				
				</select>
			</div>
			<button type='submit' class='btn btn-primary ' name='submit'> Update</button>
			<a href='manage_view.php' class='btn btn-primary '>Back</a>
		</form>
		</div>
	
		
		
		
		
		
		
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
  <script>
  </script>

	</body>
</html>