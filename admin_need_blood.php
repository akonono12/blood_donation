<?php
session_start();
include("config.php");
include("v_admin_function.php");
 if(!isset($_SESSION['usertype']))
 
?>
<html>
	<head>
			<?php include("update_head.php");?>
	</head>
	<body>

<?php include("update_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
		
			<center><h2><i style="font-size:30dpx" class="fa">&#xf1d8;</i><b> LIST OF PENDING DONORS</b></h2></center><br>

		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
					
			<?php 
				$sql="Select * from blood_donor where status = '1'";
				v_load_donor($sql,$con);
			?>
			</div>
		</div>
		</div>
	</div>
</div>
	
	  <script>
	$(document).ready(function()
	{
		$("#q").keyup(function(){
				var txt=$("#q").val();
				$.post('admin_rser.php',{q:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>

	</body>
</html>