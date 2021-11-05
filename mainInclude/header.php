<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
  initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font  -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css"> <!-- Custom CSS -->
   <!-- Student Testimonial Owl Slider CSS -->
   <link rel="stylesheet" href="css/owl.min.css">
   <link rel="stylesheet" href="css/owl.theme.min.css">
   <link rel="stylesheet" href="css/testyslider.css">

  <title>E-Vidya</title>
</head>
<body>
  <!-- start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">📚 E-Vidya</a>
  <span class="navbar-text">Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="courses.php">Courses</a> </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="paymentstatus.php">Payment Status</a></li>
      <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '<li class="nav-item custom-nav-item"><a class="nav-link" href="#">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
        } else{
          echo '<li class="nav-item custom-nav-item"><a class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter" href="#">Login</a></li>
          <li class="nav-item custom-nav-item"><a class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter" href="#">Signup</a></li>';
        }
        ?>
         
        <!-- <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Review</a></li> -->
      <li class="nav-item custom-nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      <li class="nav-item custom-nav-item"><a class="nav-link" data-toggle="modal" data-target="#eduRegModalCenter"  href="#">Educator</a></li>
      
    </ul>
  </div>
</nav>

  <!-- End Navigation -->