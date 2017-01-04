<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap</title>

    <!-- Bootstrap -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
    <link href="../../public/css/Custom-Bootstrap.css" rel="stylesheet">

  </head>
  <body>

	<?php include 'inc/headernav.php'; ?>
	
	<div class="container">
	   
 		<h1 class="text-center">Bootstrap Test</h1>
	   <button class="btn btn-primary">button</button>

	    <div class="row-4">

	      <div class="col-md-6 col-md-offset-6">
	        <form role="form" method="post" action="/Bootstrap Tuto/Form/bootstrap-contact/index.php" id="contactform">
	          <fieldset>
	            <legend>Send Us a Message</legend>

	            <div class="form-group">
	              <label for="name">Your Name<span class="help-required">*</span></label>
	              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
	            </div>

	            <div class="form-group">
	              <label for="phone">Your Phone Number<span class="help-required">*</span></label>
	              <input type="text" name="phone" id="phone" value="" class="form-control required" role="input" aria-required="true" />
	            </div>


	            <div class="form-group">
	              <label for="email">Your Email<span class="help-required">*</span></label>
	              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
	            </div>

	            <div class="form-group">
	              <label for="weburl">Your Website<span class="help-required">*</span></label>
	              <input type="text" name="weburl" id="weburl" value="" class="form-control required url" role="input" aria-required="true" />
	            </div>


	            <div class="form-group">
	              <label for="subject">Subject<span class="help-required">*</span></label>
	              <select name="subject" id="subject" class="form-control required" role="select" aria-required="true">
	                <option></option>
	                <option>One</option>
	                <option>Two</option>
	              </select>
	            </div>

	            <div class="form-group">
	              <label for="message">Message<span class="help-required">*</span></label>
	              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
	            </div>

	            <div class="actions">
	              <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
	              <input type="reset" value="Clear Form" class="btn btn-danger" title="Remove all the data from the form." />
	            </div>
	          </fieldset>
	        </form>
	      </div><!-- col -->
	    </div><!-- row -->
	    </div> <!-- /container -->

		 asd
	<?php include 'inc/footer.php'; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../public/js/bootstrap.min.js"></script>
  </body>
</html>