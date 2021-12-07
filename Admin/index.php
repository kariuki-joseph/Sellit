<?php
//check for login
session_start();

if (!isset($_SESSION['admin'])) {
 header('Location:Login/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selecao Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.2.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div class="row bg-warning">
  <div class="col-sm-12 col-md-12 d-flex justify-content-around">
    <h4>Welcome to the admin dashboard</h4>
    <?php 
    include 'dbConnect.php';
    $loggedEmail=$_SESSION['admin'];
//get the logged in user
    $query = mysqli_query($conn,"SELECT * FROM users WHERE email='$loggedEmail'");
    $row = mysqli_fetch_array($query);
    ?>
    <p>Logged in as: <?php echo $row['username']; ?>
      <a href="logout.php"> Logout?</a>
    </p>
  </div>
</div>
<div class="row">
  <div class="col-sm-4 col-md-4 bg-warning">
    <ul class="dashboard-items">
      <li class="dashboard-item" data-id="updates">Add an Update</li>
      <li class="dashboard-item" data-id="faq">Add Faq quiz</li>
      <li class="dashboard-item" data-id="services">Add Services</li>
      <li class="dashboard-item" data-id="messages">View Messages</li>  
    </ul>
  </div>
  <div class="col-sm-8 col-md-8 bg-secondary">
    <?php
    if (isset($_SESSION['error'])) {
    ?>
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <?php
      echo $_SESSION['error'];
      unset($_SESSION['error']);
      ?>
    </div>
    <?php
  }elseif (isset($_SESSION['success'])) {
    ?>
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
      ?>
    </div>
    <?php
  }
    ?>
    <div id="forms_holder">
      <!--holds forms-->
<h4>Familiarise yourself with the admin dashboard.</h4>
<ol>
  <li>You can add updates to be viewed by your clients from the 'Add an Update' tab.</li>
  <li>Answer the most asked questions from the 'Add Faq quiz' tab.</li>
  <li>Add services that you offer from the 'Add Services' tab.</li>
  <li>View messages sent to you by your clients from the 'View Messages' tab.</li>
</ol>
    </div>
  </div>
</div>
<!--scripts-->
<!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/scripts.js"></script>
</body>
</html>
