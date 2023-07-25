<?php
session_start();
include("config.php");
include("manage_function.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]  !== true) {
	header ("location: brbc_login_form.php");
	exit;
}	
?>
<html>
	<head>
			<?php include("manage_head.php");?>
	
	</head>
	<body>

<?php include("manage_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h2><span class="glyphicon">&#xe064;</span><b> BLOOD BANK</b></h2></center><br>

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
	
			<form role="form">
				
					<input type="text" id="mb" placeholder="Search" class="form-control"><br>
				
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select * from blood_bank";
				v_load_donor($sql,$con);
			?>
			
			<div>
		</div>
		
		
		</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>	
  <script>
	$(document).ready(function()
	{
		$("#mb").keyup(function(){
				var txt=$("#mb").val();
				$.post('manage_ser.php',{mb:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>

	</body>
</html>