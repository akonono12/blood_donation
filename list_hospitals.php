<?php

session_start();
include("config.php");
include("l_admin_function.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin_login_form.php");
    exit;
}

?>
<html>
	<head>
			<?php include("head_list.php");?>
	
	</head>
	<body>

<?php include("l_admin_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_form_sidenav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h2><i style="font-size:30px" class="fa">&#xf02d;</i><b> REGISTERED HOSPITALS</b></h2></center><br>

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
	
			<form role="form">

				
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select * from hospital";
				l_load_donor($sql,$con);
				
			?>
			
			
			<div>
		</div>
		
		
		</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>	


	</body>
</html>