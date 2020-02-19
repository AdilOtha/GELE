<br>
<!-- Footer -->
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];

  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = 0;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'adilotha@gmail.com';                     // SMTP username
      $mail->Password   = 'FeLiNa Pryde 7797';                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587;                                   // TCP port to connect to

      //Recipients
      $mail->setFrom('from@example.com', 'Mailer');
      $mail->addAddress('adilotha@gmail.com', 'Adil Otha');     // Add a recipient


      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Here is the subject';
      $mail->Body    = "<p>".$msg."<p>";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      if($mail->send()){
          echo "<script>                
              setTimeout(function(){
                alert('MSG Sent');
            },2000);
          </script>";
      }
    }
    catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
<footer class="page-footer pt-4 text-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
    	<!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">follow us on</h5>
        <br>
        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/geleindia/"><i class="fab fa-facebook fa-lg text-dark"></i></a>
          </li>
          <br>
          <li>
            <a href="https://www.instagram.com/gele_india/"><i class="fab fa-instagram fa-lg text-dark"></i></a>
          </li>
          <br>          
          <li>
            <a href="https://www.linkedin.com/company/g-e-l-e"><i class="fab fa-linkedin fa-lg text-dark"></i></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-8 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Contact Us</h5>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        	<label for="uname">Name</label>
        	<div class="row" id="uname">
  			    <div class="col">			      	
  			      <input type="text" name="fname" id="fname" class="form-control" placeholder="First name">
  			    </div>
  			    <div class="col">			    	
  			      <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name">
  			    </div>
  			  </div>
  			<br>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">		    
		  </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Message</label>
        <input type="text" class="form-control" name="msg" aria-describedby="msg" placeholder="Enter message">        
      </div>
		  <br>		  
  			<button type="submit" name="submit" class="btn" id="contact_us">Submit</button>
		</form>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">      

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright. All Rights Reserved.</div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>