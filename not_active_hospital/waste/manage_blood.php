<?php
session_start();
include("config.php");
include("manage_blood_function.php");
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

<?php include("manage_blood_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h3>Blood List </h3> </center><br>

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
		
			<form role="form">
				
					<input type="text" id="n" placeholder="Search...	" class="form-control">
				
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select * from blood_donor";
				load_manage_blood($sql,$con);
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
		$("#n").keyup(function(){
				var txt=$("#n").val();
				$.post('manage_ser.php',{n:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>

	</body>
</html>