<?php include"config.php";?>
<html>
<?php include"head.php";?>
<body>
<?php session_start(); include("user_top_nav.php"); ?>

    <div class="container" style="margin-top:60px;">
	

			
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO hospital_mssg (h_name, contact, blood_type, num_units , message, status,logs) VALUES ('{$_POST["h_name"]}', '{$_POST["contact"]}', '{$_POST["blood_type"]}', '{$_POST["num_units"]}','{$_POST["message"]}',  1,NOW());";
						if($con->query($sql))
				{
					echo "<script>alert('Message Successfully Sent!'); location.href='h_contact.php'</script>";
				}
					}
				?>
		
                <form method="post" action="h_contact.php" role="form" >
                    <div class="form-group">
							
						<input type="hidden" id="h_name" name="h_name" required class="form-control input-sm" readonly="enabled" value="<?php echo $_SESSION['HosName'];?>">
						</div>
                    <div class="control-group form-group">
                        <div class="controls">
                            
                            <input type="hidden" class="form-control" name="contact"  readonly="enabled" required value="<?php echo $_SESSION['contactNo'];?>">
                        </div>
                    </div>
					
					<div class="form-group">
							
						<input type="hidden" name="blood_type" required class="form-control input-sm" value="<?php echo $_GET['b'];?>">	
							
						</div>
					
                 <div class="control-group form-group">
                        <div class="controls">
                            <label>No. of Blood Unit/s:</label>
                            <select class="form-control" name="num_units" placeholder="Input Unit Number" required>

                            <?php
                               for($x=1;$x<=$_GET['c'];$x++){
                               	echo '<option value ="'.$x.'">'.$x.'</option>';
                               }
                            ?>

							</select>
                        </div>
                    </div>
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" placeholder="Input Message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
					
					  
					
                    <button type="submit" class="btn btn-primary" name="submit"></i> Send Message</button>
					<a href='h_form.php' class='btn btn-primary '>Back</a>
                </form>
				
			</div>
			
           
        </div>


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
