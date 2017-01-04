<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
	<!-- PLUGINS -->
    <link href="../../public/plugins/scrollnav/css/scrolling-nav.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../../public/css/Custom-Bootstrap.css" rel="stylesheet">
    
  </head>
  <body id="page_top"  >
	
	<!-- NAVIGATION BAR -->
	<?php include 'inc/headernav.php'; ?>





	<section id="main" class="intro-section">
		<div class="container"> 
			<div class="row">
	            <div class="col-md-12">
	                <h1>Scrolling Nav</h1>
	                <p>This will bring you down</p>
	                <a class="btn btn-default page-scroll" href="#second">Click Me to Scroll Down!</a>
	            </div>
	        </div> 
		</div>
	</section>

	
	   
	<section id="second" class="contact-section">
		<div class="container"> 
			<div class="row"> 
	            <div class="col-md-12">
	                <h1>Scrolling Nav</h1>
	                <p>This will bring you up</p>
	                <a class="btn btn-default page-scroll" href="#page_top">Click Me to Scroll Up!</a>
	            </div> 
	        </div>
        </div>
	</section>


	<!-- FOOTER -->
	<?php include 'inc/footer.php'; ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../public/js/bootstrap.min.js"></script>

    <script src="../../public/plugins/scrollnav/js/jquery.easing.min.js"></script>
    <script src="../../public/plugins/scrollnav/js/scrolling-nav.js"></script>


  </body>
</html>