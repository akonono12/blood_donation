<?php
session_start();
include("config.php");
include("v_admin_function.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: brbc_login_form.php");
    exit;
}
?>
<html>
	<head>
			<?php include("reg_donor_head.php");?>
	
	</head>
	<body>

<?php include("v_admin_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h2><i style="font-size:30px" class="fa">&#xf02d;</i><b> LIST OF REGISTERED DONORS</b></h2></center><br>

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
	
			<form role="form">

				
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select * from blood_donor where status = '2'";
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
		$("#v").keyup(function(){
				var txt=$("#v").val();
				$.post('v_admin_ser.php',{v:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>

	</body>
</html>