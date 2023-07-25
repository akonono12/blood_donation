

<?php
session_start();
include("config.php");
?>


<?php
				if(isset($_POST["submit"]))
					{
						if($_POST["user"]=="admin"&&$_POST["pass"]=="admin")
						{
							 $_SESSION['usertype'] ='admin';
							 $_SESSION['username']='admin';
							
							header("location:Donor_inbox.php");
						}
						
					}
				?>
<html>

<head>
	<?php include("head.php");?>
	<title>Admin Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/logincss.css">
	
</head>
<?php include("top_nav.php"); ?>
<body>	
		<div class="login-box">	
			<form role="form" action="admin.php" method="post">
					
						<img src="css/images/avatar.png" class="avatar">
						<h1>ADMIN</h1>
	
						<p>Username</p>
						<input id="user" type="text" name="user" placeholder="Enter Username" class="form-control" required >
						
						<p>Password</p>
						<input id="pass" type="password" name="pass" placeholder="Enter Password" class="form-control" required>
							
						<input type="submit" name="submit" class="btn btn-primary" value="Login">   
      
			</form>
		</div>
</body>
</html>
