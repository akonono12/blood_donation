<?php include"config.php";?>
<html>
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>
	
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO d_mssg (Name, Contact, Email, Message, Status,Logs) VALUES ('{$_POST["Name"]}', '{$_POST["Contact"]}', '{$_POST["Email"]}', '{$_POST["Message"]}', 1,NOW());";
						if($con->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<center> Your message has been successfully sent</center>
						<center> Thank you for sending us a message</center>
						<a class="btn btn-primary btn-block" href="Donor_reg.php">DONATE NOW</a>
					</div>

					';
				}
					}
				?>
	</div>
  
	<div class="container" style="margin-top:40px;">
                <center><h1>"Thank you for adding as a Donor"</h1><center><br>
				<p> Please Visit "Bicol Regional Blood Center (BRBC)" for Donating your Blood</p><br>
				<p>or Send Us Your Message Below</p><br>
				<p>"For more information read the steps below on how to give blood"</p>
                
				</div></br>
	
	
    <div class="container" style="margin-top:70px;">
	  <h1 class="text-primary">Steps of Giving Blood</h1><br>
        <div class="row">

            <div class="col-md-6">
                <h2>A. Before Giving Blood:</h2><br><br>
                <b><p>When you arrived at the "blood donation site" you will be able to take the following essential information with the help of our donor specialist staff:</p></br><br>
				
				1. Questions about your health.<br><br>
				2. Your weight, blood pressure, pulse rate, and temperature will be checked.<br><br>
				3. Medical and Social History<br><br>
				4. Giving "pre-donation education and counseling".<br><br>
				5. Your overall health will also be reviewed by our "medical officer / doctor" to fully determine your physical condition.<br><br>
				6.	All the information you have recorded will definitely be kept "confidential".<br><br>
                
				<br><br><h2 >B. While Giving Blood</h2><br>
				1. A trained staff will clean your arm with an antiseptic and use a blood donation kit to draw blood from a vein in your arm.<br><br>
				2. The blood taken depends on the weight of a person that does not exceed 450ml.<br><br>
				3. After removing the needle the phlebotomist will have you elevate your donation arm and apply slight pressure to promote clotting.<br><br>

				
				<br><br><h2>C. After Giving Blood</h2><br>
				1. Stay lying down for 20 minutes.<br><br>
				2. After 20 minutes, you can sit and eat "snacks" provided by our staff.<br><br>
				3. Drink plenty of water or juice except alcohol and avoid carrying heavy objects.<br><br>
				4. The fluid removed from the body will be restored after 3-5 hours.<br><br>

				
				
		
            </div>
        </div>
		<hr>
	</div>
	
	 <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

			<div class="row">
				
		
				<center><h1>Send us a Message</h1></center>
                <form method="post" action="Donor_after_reg_page.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full name:</label>
                            <input type="text" class="form-control" placeholder="Input your Complete Name..." name="Name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="Contact" class="form-control" name="Contact" placeholder="Input Contact Number..." required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="Email" class="form-control"  name="Email" placeholder="Input Contact Email Address..."   >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="Message" placeholder="Input Message..." required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
				
                    <button type="submit" class="btn btn-primary btn-block" name="submit"> Send Message</button>
                </form>
				
			</div>
			
            


        <hr>
		<?php include"footer.php"; ?>
  
   
 
</body>
</html>