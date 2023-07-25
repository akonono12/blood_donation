<?php
session_start();
include("config.php");
include("manage_function.php");
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
<div class="container" style='margin-top:70px'>
<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<center><h3>Blood Management </h3> </center><br>

		
		<div class="col-md-6 col-md-offset-3">
	
			<form role="form">
				
					<hr><input type="text" id="mb" placeholder="Search...	" class="form-control"><hr>
				
			</form>
			
		</div>

		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select * from manage_blood";
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
		$("#mb").keyup(function(){
				var txt=$("#mb").val();
				$.post('manage_ser.php',{mb:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>
</div>
	</body>
</html>