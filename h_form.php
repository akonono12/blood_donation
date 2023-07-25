<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page

?>
<?php
if(empty($_SESSION["username"]) &&  $_SESSION["loggedin"] != 'true'){
header("location: index.php");	
}
include("config.php");

include("h_function.php");
$sel=$con->query("Select * from hospital where username ='$_SESSION[username]' ");
$data=$sel->fetch_assoc();
@$_SESSION['HosName']=$data['hospital_name'];
@$_SESSION['contactNo']=$data['hospital_contact'];
 ?>
 <?php include"hospital_head.php";?>
<html>
<?php include"user_top_nav.php";?>

<div class="container" style='margin-top:70px'>

			<center><h2><b><span class="glyphicon">&#xe064;</span> &nbsp;BLOOD BANK</b></h2></center><br>

		<div class="row">
		<div class="col-md-6 col-md-offset-3">
	
			<form role="form">
				
					<input type="text" id="h" placeholder="Search" class="form-control"><br>
				
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			<?php 
				$sql="Select *, count(blood_type) as count from blood_bank group by blood_type";
				v_load_donor($sql,$con);
			?>
			</div>
		
	
		</div>
  
  
<?php include("admin_footer.php"); ?>	
  <script>
	$(document).ready(function()
	{
		$("#h").keyup(function(){
				var txt=$("#h").val();
				$.post('h_ser.php',{h:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>
</html>