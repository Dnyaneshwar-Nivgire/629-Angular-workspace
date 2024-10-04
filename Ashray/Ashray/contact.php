
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbnm = "ashray";

$con = mysqli_connect($server, $username, $password, $dbnm);

if (!$con) {
  echo "Error connecting to server" . mysqli_connect_error();
} else {
  // echo "Connecting to the server";
}

$message = ""; // asach declaration

if (isset($_POST['sub'])) {
  $nm = $_POST['name'];
  $ownnernm = $_POST['ownernm'];
  $ph = $_POST['phno'];
  $msg = $_POST['message'];


  if (strlen($ph) != 10 || !is_numeric($ph))  //10 digit ahet ka nahi check karyala
  {
    $message = "Please enter a valid 10-digit phone number";
  } else {
    $sql = "INSERT INTO c_feedback (name, ownnernm, suggestion, feedback, 	date) VALUES ('$nm' ,' $ownnernm', '$ph', '$msg',Now());";

    if ($con->query($sql) == true) {
      $message = "*Thank you for your feedback";
    } else {
      echo "Error inserting data: " . mysqli_error($con);
    }
  }

  $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Property Buy And Rent Management</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <style>
    .feed input {
      display: block;
    }

    .msg {
      width: 350px;

      margin-bottom: 10px;
      color: red;
  
    }
    ul > li > a > img
    {
    width: 25px !important;
    height: 25px !important;
   margin-top: -10px;
    }
  </style>
</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@ashray.com</li>

          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
          <li><a href="https://github.com/MilakeSuraj" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/surajmilake?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/suraj_milake?igsh=MWw1dWxrMmJieGp2dA=="><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h1>ASHRAY</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php" class="active">Home</a></li>
              <li><a href="properties.php">Properties</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="premium_mem.html">Premium <img src="crown-svgrepo-com.svg" alt="" > </a></li>
              <li><a href="loginpage.php"><i class="fa fa-calendar"></i>Upload Property</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Contact Us</span>
          <h3>Contact Us</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section" style="margin-top: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| Contact Us</h6>
            <h2>We value your feedback!</h2>
          </div>
          <p> If you have any comments, suggestions, or feedback related to a specific property, please take a moment to fill out the form below and send us your message. Your insights help us enhance the rental experience for everyone. Thank you for being a part of our community!"</p>
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>7709667077<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>info@Ashray.com<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="feed">
            <form id="contact-form" method="POST">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <label for="name">Full Name</label>
                    <input type="name" name="name" id="name" placeholder="Your name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <label for="email">Property Owner</label>
                    <input type="text" name="ownernm" placeholder="Owner name...">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <label for="sugg">Contact No</label>
                    <input type="text" name="phno" placeholder="Owner Phone No..." required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <label for="message">Feedback</label>
                    <textarea name="message" id="message" placeholder="Write Your Feedback With Full Details."></textarea>
                  </fieldset>
                </div>

                <div class="msg">

                  <script>
                    var message = "<?php echo $message; ?>";
                    if (message != "") {
                      document.write(message);
                    }
                  </script>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="submit" name="sub" style="border-radius: 50px; background:black; color:white; width:150px; height:40px" value="Send Message">
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © Ashray
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>