<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">	
	<title>G.E.L.E. - Education for the Future</title>
  <link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <?php 
  if(isset($_SESSION['mailSent'])){        
        echo "hello<script>alert('Your mail has been sent successfuly!')</script>";
        session_destroy();
      }
   ?>
<nav class="navbar navbar-expand-lg navbar-light navbar-static-top">
  <a class="navbar-brand" href="index.php">
    <img src="images/G.E.L.E LOGO.png" width="130" height="80" alt="GELE Logo">    
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="journey.php">Journey <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="achievements.php">Achievements</a>
      <a class="nav-item nav-link" href="whatsnext.php">What's Next</a>
      <a class="nav-item nav-link" href="team.php">Team</a>      
    </div>
  </div>
</nav>
</nav>