<?php
session_start();
include("config.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: brbc_login_form.php");
    exit;
}
?>
<html>
	<head>
			<?php include("h_inbox_head.php");?>
	</head>
	<body>
	<div class="container"  style='margin-top:70px;'>

<?php include("admin_topnav.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<br>
		<br>
			<div class="col-sm-9" >
			<a href="h_mess_del.php?id=<?php echo $_GET['id']; ?>" class="btn-sm pull-right">Delete Message</a><br>  	    
	<?php 
				$sql="UPDATE hospital_mssg SET STATUS=0 WHERE hospital_mssg_id=$_GET[id]";
				$result=$con->query($sql);
				$sql="SELECT * FROM hospital_mssg  WHERE hospital_mssg_id=$_GET[id]";
				$result=$con->query($sql);
				if($result->num_rows>0)
				{
					if($row=$result->fetch_assoc())
					{
						echo"<p><h6>Message Received at &nbsp;: " .$row['logs']."</p></h6>";
						echo"<h4><b>Hospital Name:&nbsp;</b>" .$row['h_name']."";
						echo"<b><p>Hospital Contact Number :</b> " .$row['contact']."</p>";
						echo"<b><p>Blood Type :</b> " .$row['blood_type']."</p>";
						echo"<b><p>No. of Blood Unit/s :</b> " .$row['num_units']."</p><br>";
						echo "<b><p><p>Message:</p></b>" .$row['message']."</p><br>";
						
						
						
					}
				}
			?>
		  <br><center><a href='h_inbox.php' class='btn btn-primary '>Back</a></center></br>
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	 </div>
	</body>
</html>