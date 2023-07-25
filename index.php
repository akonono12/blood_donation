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
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/brbc.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/s1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/s2.jpg');"></div>
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
                
                    <center><p><b><h4>"BRING A LIFE BACK TO POWER. MAKE BLOOD DONATION YOUR RESPONSIBILITY."</h4></p></center><br>
				
                
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="brbc_login_form.php" ><span class="glyphicon">&#xe064;</span> &nbsp; <b>I'M A BLOOD CENTER NURSE</a>
                </div>
				
				<div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="donor_reg.php"><span class="glyphicon">&#xe064;</span> &nbsp; <b>I'M A BLOOD DONOR</a>
                </div>
				
				<div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="h_login_form.php"><span class="glyphicon">&#xe064;</span> &nbsp; <b>I'M A HOSPITAL NURSE</a>
                </div>
            </div>
        </div>
		


    <!-- Page Content -->
    <div class="container">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>
</body>

</html>
