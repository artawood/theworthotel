<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" 				content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" 			content="Centrally located blocks from San Francisco Union Square, The Worth Hotel is ideal for students or young professionals.">
    <meta name="keywords"				content="The Worth Hotel, San Francisco, Thai, student, ห้องเช่า, ซานฟรานซิสโก">
    <meta name="author" 					content="Pantipa Chitamitara">
    <!-- Facebook Markup -->
    <meta property="og:url"				content="http://www.theworthhotel.com">
    <meta property="og:title"			content="The Worth Hotel San Francisco">
    <meta property="og:description"		content="Centrally located blocks from San Francisco Union Square, The Worth Hotel is ideal for students or young professionals.">
    <meta property="og:image"			content="http://www.theworthhotel.com/images/homepage/section1/slide_1.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>The Worth Hotel | Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- Font Type -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark static-top">
      <a class="navbar-brand" href="index.html"><img class="worth-hotel-logo" src="images/header/logo-white.png" alt="The Worth Hotel Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav nav-bottom mr-auto">
          <li class="nav-item nav-space mobile-nav">
            <a class="nav-link cormorant" href="rooms.html">ROOMS</a>
          </li>
          <li class="nav-item nav-space mobile-nav">
            <a class="nav-link cormorant" href="gallery.html">GALLERY</a>
          </li>
          <li class="nav-item nav-space mobile-nav">
            <a class="nav-link cormorant" href="about.html">ABOUT</a>
          </li>
          <li class="nav-item nav-space mobile-nav">
            <a class="nav-link cormorant" href="contact.php">CONTACT</a>
          </li>
        </ul>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item mobile-nav text-center">
              <a href="th/contact.php"><img class="flag" src="images/header/flag-thai.png" alt="Thai Flag"></a>
              <a class="nav-link flag-thai-text" href="th/contact.php">ไทย</a>
            </li>
            <li class="nav-item mobile-nav text-center">
              <a href="#"><img class="flag" src="images/header/flag-eng.png" alt="American Flag"></a>
              <a class="nav-link flag-eng-text" href="#">ENG</a>
            </li>
            <li class="nav-item hide-nav">
              <a class="nav-link" href="#"> | </a>
            </li>
            <li class="nav-item fb-mobile text-center">
              <a class="nav-link" href="http://www.facebook.com/theworthhotel/" target="_blank"><img class="fb-logo-header" src="images/header/facebook-logo-white-background.png" alt="Facebook Logo"></a>
            </li>
          </ul>
      </div>
    </nav>
	
    <!-- Section 1
    ================================================== -->
    <!-- Jumbotron -->
    
    <div class="jumbotron contact-header">
      <div class="container page-header">
        <h1 class="display-3">CONTACT</h1>
      </div>
    </div>

    
    <!-- Section 2
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">

      <div class="row featurette">
        <div class="col-lg-5 order-lg-1">
          <div class="container contact-info">
            <h3 class="font-weight-bold contact-title">Location</h3>
            <p class="lead"><address>The Worth Hotel<br>641 Post St.<br>San Francisco, CA 94109</address></p>
          </div>
          <div class="container contact-info">
            <h3 class="font-weight-bold contact-title">Contact Information</h3>
            <p>Phone: <a href="tel:+14157753940" style="color: #000000;"> (415) 775 - 3940</a> <br>Email: <a href="mailto:info@theworthhotel.com" style="color: #000000;"> info@theworthhotel.com</a></p>
          </div>
        </div>
        <div class="col-lg-7 order-lg-2">
          <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.100908322129!2d-122.41455554935067!3d37.787674879657814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808e1bf46fcd%3A0x4ef20eaa7fea53a2!2sWorth+Hotel!5e0!3m2!1sen!2sus!4v1507090474698" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
     
     <!-- Contact Form -->
      
      <form class="container" id="needs-validation" novalidate method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" role="form">
        <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="firstname" name="name1" placeholder="FIRST NAME" required>
                <div class="invalid-feedback">Please provide First Name.</div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="lastname" name="name2" placeholder="LAST NAME" required>
                <div class="invalid-feedback">Please provide Last Name.</div>
              </div>  
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required>
                <div class="invalid-feedback">Please provide valid Email.</div>
              </div>
              <div class="form-group">
                <select class="form-control" name="subject" id="contact-about" required>
                  <option value="" selected disabled style="color: #8E949C;">CONTACTING ABOUT</option> 
                  <option>Renting</option>
                  <option>General Inquiry</option>
                </select>
                <div class="invalid-feedback">Please select what you are contacting about.</div>
              </div>    
            </div>

          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control message-box" id="message" rows="9" name="message" placeholder="MESSAGE" required></textarea>
              <div class="invalid-feedback">Please tell us more information</div>
            </div>
            <div class="form-group"><button type="submit" class="btn btn-secondary" style="float: right;">GET IN TOUCH</button></button></div>
          </div>
        </div>
        <?php
			if (isset($_POST["email"])) {
				
					$subject = $_POST['subject'];
					$email = $_POST['email'];
					$message = 'From: '.$_POST['name1']." ".$_POST['name2']."\n\n";
					$message .= 'Email: '.$_POST['email']."\n\n";
					$message .= 'Contacting About: ' .$_POST['subject']."\n\n";
					$message .= 'Message: '."\n\n".$_POST['message']."\n\n";
					$subject2 = 'Confirmation Email from The Worth Hotel';
					$message2 = 'Dear ' .$_POST['name1'].','."\n\n";
					$message2 .= 'This is to confirm that we have received your input. We will respond to you very soon.'."\n\n";
					$message2 .= 'If this email was incorrectly sent to you, please send an email to info@theworthhotel.com to let us know.'."\n\n";
					$message2 .= 'Thank you very much!'."\n\n";
					$message2 .= '_______________________________________________________________________________________________________'."\n\n";
					$message2 .= 'Your message: '."\n\n";
					$message2 .= 'Contacting About: '.$_POST['subject']."\n\n";
					$message2 .= $_POST['message'];
					$headers = 'From: info@theworthhotel.com';
					//send mail to webmaster
					mail('info@theworthhotel.com', $subject, $message, $headers);
					//send mail to 2nd webmaster
					mail('theworthhotel@yahoo.com', $subject, $message, $headers);
					//send confirmation mail to client
					mail($email, $subject2, $message2, $headers);
					echo '<script> window.location = "confirmation.html"</script>';
				}
			  ?>
      </form><!-- Contact Form -->

      <!-- /END Section 2-->
    </div>
   
    <!-- FOOTER -->
    <footer>
      <div class="footer">
        <div class="col-lg-3">
          <div class="footer-columns logo-footer"><a href="index.html"><img class="logo-footer-image" src="images/footer/logo-white.png" alt="The Worth Hotel Logo"></a></div>
        </div>
        <div class="col-lg-6">
          <div class="footer-columns footer-text" style="padding-top: 5%;">
            <address>
            641 Post St. San Francisco, CA 94109
            </address>
            <label title="Phone">Phone:</label> <a href="tel:+4157753940">(415) 775 - 3940</a> | <label title="Email">Email: </label><a href="emailto:info@theworthhotel.com"> info@theworthhotel.com</a>
          </div>
          <hr class="footer-divider">
          <div class="footer-columns footer-text">
          <p><small>&copy; 2017 The Worth Hotel, LLC  |  <a class="footer-text" href="#" style="color: #C1C1C1;">Site Map</a>  |  <a class="footer-text" href="#" style="color: #C1C1C1;">Legal Notices</a></small></p>
          <p><small>Designed by <a class="footer-text pantipa" href="http://www.pantipa.com" target="_blank" style="color: #C1C1C1;">Pantipa</a></small></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="container footer-columns footer-text fb-logo-footer">
          <h4>Follow Us On</h4>
          <a href="https://www.facebook.com/theworthhotel/" target="_blank"><img class="fb-logo-image" src="images/footer/facebook_logo_white_background_footer.png" alt="Facebook Logo"></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  "use strict";
	  window.addEventListener("load", function() {
		var form = document.getElementById("needs-validation");
		form.addEventListener("submit", function(event) {
		  if (form.checkValidity() == false) {
			event.preventDefault();
			event.stopPropagation();
		  }
		  form.classList.add("was-validated");
		}, false);
	  }, false);
	}());
	</script>
  </body>
</html>

