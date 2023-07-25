    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Blood Donation Management and Information System </a>
            </div>
          
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				<li> <i style="font-size:39px" class="fa">&#xf007;</i><?php echo htmlspecialchars($_SESSION["username"]); ?></li>
				<li><a href="h_logout.php"><i  class="fa">&#xf08b;</i> Logout</a></li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>