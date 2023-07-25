
<html>
<?php include"head.php";?>
<body>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/blood_center.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/brtth.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
	
	<div class="well">
             <div class="row">
                
                    <center><p>“Do you feel you don’t have much to offer? You have the most precious resource of all: the ability to save a life by donating blood! Help share this invaluable gift with someone in need.”</p></center>
                
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="admin.php">ADMIN</a>
                </div>
				
				<div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="Donor_reg.php">DONATE NOW</a>
                </div>
				
				<div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="h_login_form.php">HOSPITAL</a>
                </div>
            </div>
        </div>
		


    <!-- Page Content -->
    <div class="container">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
