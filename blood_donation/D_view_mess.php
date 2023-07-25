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
			<?php include("admin_head.php");?>
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
			<h2> Donor Message<a href="D_mess_del.php?id=<?php echo $_GET['id']; ?>" class="btn-sm pull-right">Delete Message</a></h2>  	  
			<hr>  
	<?php 
				$sql="UPDATE d_mssg SET STATUS=0 WHERE id=$_GET[id]";
				$result=$con->query($sql);
				$sql="SELECT * FROM d_mssg  WHERE id=$_GET[id]";
				$result=$con->query($sql);
				if($result->num_rows>0)
				{
					if($row=$result->fetch_assoc())
					{
						echo"<p><h6>Message Received at &nbsp;: ".$row['Logs']."</p></h6>";
						echo "<h4>".$row['Name']." </h4>";
						echo"<p>Donor Contact Number : ".$row['Contact']."</p></br>";
						echo "<p><p>Read Message:</p>".$row['Message']."</p><br>";
						
						
						
					}
				}
			?>
		
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	 </div>
	</body>
</html>