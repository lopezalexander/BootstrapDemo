<nav class="navbar navbar-inverse navbar-fixed-top">   
	    <div class="container">
		    	<div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span> 
		          </button>
		          <a class="navbar-brand" href="homepage.php">Bootstrap Testing</a>
		        </div>

		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "homepage.php" ? "active" : ""); ?>" ><a class="active" href="homepage.php">Home</a></li>
		            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "about.php" ? "active" : ""); ?>" ><a href="about.php">About</a></li>
		            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "contact.php" ? "active" : ""); ?>" ><a href="contact.php">Contact</a></li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					    	 Bootstrap Demo <span class="caret"></span>
					    </a>
					  	<ul class="dropdown-menu">
						    <li><a href="about.php">About</a></li>
						    <li><a href="#">Another action</a></li>
						    <li><a href="#">Something else here</a></li>
					    </ul>
					</li>
		          </ul>
		        </div><!--/.nav-collapse -->
    	</div> <!-- Container -->
    </nav><!-- Navigation Bar -->
