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
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<br>
		<br>
		<div class="col-sm-9" >
			<center><h2> Message</center> <center><br><a href="admin_mess_del.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary">Delete Message</a></h2> </center>
			<br>
			<br>
	<?php 
				$sql="UPDATE messages SET STATUS=0 WHERE ID=$_GET[id]";
				$result=$con->query($sql);
				$sql="SELECT * FROM messages  WHERE ID=$_GET[id]";
				$result=$con->query($sql);
				if($result->num_rows>0)
				{
					if($row=$result->fetch_assoc())
					{
						echo"<p>Message Received at ".$row['LOGS']."</p> <br>";
						echo "<h4>".$row['NAME']." </h4>";
						echo "<p>".$row['MESSAGE']."</p>";echo"<b>Contact ".$row['CONTACT']."</b>";
						
						
					}
				}
			?>
		
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	</body>
</html>