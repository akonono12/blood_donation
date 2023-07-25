<?php include"config.php";
include ( "src\NexmoMessage.php" );?>
<html>
<?php include"contact_head.php";?>
<body>

<?php
	 include"reg_topnav.php";
?>
    <div class="container" style="margin-top:60px;">
	

			<div class="row">
			 <div class="col-md-4">
                <h2 class="text-primary"><b>Contact Details</b></h2><br>
				<h4 class="text-primary"><b>For more information visit:</b></h4>
				<p>
				<b>DOH CHD Bicol Regional Blood</b></p>
				<b><p>Center, Legazpi City</b></p>
                <br><h4 class="text-primary"><p><i class="fa fa-phone"></i> 
				<b>Telephone Number:</h4> <p>(052) 742-26-00</p><br>
                <img class="img-responsive" src="images/donation.jpg" alt="">
            
            </div>
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{$number='+63'.$_POST["contact"];
				     $msg="Good day Sir/Madam: ".$_POST["name"]." Thank You For Your Concern.";
						$nexmo_sms = new NexmoMessage('f7466374','u3d3yjbqnsQlVPTK');
						//send message using simple api params
					$info = $nexmo_sms->sendText( $number, 'blood', $msg );
					$nexmo_sms->displayOverview($info);	
					 $sql="INSERT INTO donor_mssg (name, contact, email, message, status,logs) VALUES ('{$_POST["name"]}', '{$_POST["contact"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($con->query($sql))
				{
					echo "<script>alert('Message Successfully Sent!'); location.href='contact.php'</script>";
				}
					}
				?>
		
				<h2 class="text-primary"><b>Feedback / Suggestions</b></h2><br>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <h4><label>Full Name:</label></h4>
                            <input type="text" class="form-control" name="name" placeholder="Enter your Complete Name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <h4><label>Contact Number:</label></h4>
                            <input type="contact" class="form-control" name="contact" placeholder="Enter your Contact Number" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <h4><label>Email Address:</label></h4>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email Address"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <h4><label>Message:</label></h4>
                            <textarea rows="5" cols="100" class="form-control" name="message"  required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit"></i> Send Message</button>
					<a href='donor_reg.php' class='btn btn-primary '>Back</a>
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
