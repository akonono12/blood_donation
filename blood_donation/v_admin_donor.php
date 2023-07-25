<?php
session_start();
include("config.php");
include("v_admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<html>
	<head>
			<?php include("v_admin_head.php");?>
	
	</head>
	<body>

<?php include("v_admin_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h3>Registered Blood Donor</h3> </center><br>

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
	
			<form role="form">

				
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select * from blood_donor where status = 'registered'";
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