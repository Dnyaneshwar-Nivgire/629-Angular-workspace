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
    .mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 900px;
 padding-top: 40px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

    .slider-container {
      max-width: 100%;
      overflow: hidden;
      position: relative;
    }

    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;

    }

    .slide {
      min-width: 100%;
    }


    .items {
      background-color: #fafafa;
      border-radius: 10px;
      padding: 30px;
      margin-bottom: 30px;
    }

    .items img {
      width: 100%;
      height: 300px;
    }

    .swiper-container {
      max-width: 100%;
      overflow: hidden;
      position: relative;
    }

    .swiper-wrapper {
      transition: transform 0.5s ease-in-out;
      display: flex;
    }

    .swiper-slide {
      min-width: 100%;
    }

    .items {
      background-color: #fafafa;
      border-radius: 10px;
      padding: 30px;
      margin-bottom: 30px;
    }

    .items img {
      width: 100%;
      height: 265px;

    }

    .property-table {
      width: 100%;
      border-collapse: collapse;

    }

    .property-table  td {
      border: 2px solid #ccc;
      padding: 2px;
       

    }

    .table-label {
      color: brown;
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
              <li><a href="index.php" class="active" style="background:none;">Home</a></li>
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

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Find Dream <em>Space</em></span>
          <h2>Hurry!<br>Get the Best property for you</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Athorised, <em>Property</em></span>
          <h2>Be Quick!<br>Get the best room in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Safe And <em>Secure</em></span>
          <h2>Act Now!<br>Find Your Best Deal Right Now!</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/featured.jpg" alt="">
            <a href="#"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Featured</h6>
            <h2>Best Properties For Buy or Sell.</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Sell or rent your property for free on Ashray!
                </span>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Become a part of the growing Ashray Family. As a promise to our clients and owner’s of the property , all our listings are completely free & always will be.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does this work ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ashray is a popular real-estate platform that lets you rent/sell/buy a property without paying any brokerage.
                  You can use our verified listing to ensure you get your dream property by contacting the property owner directly. You can also post your property details by creating account.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is Ashray the best ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ashtray is the best real estate website which helps you to find what you need , when you need it, no matter where you are in your plans to buy, rent or sell.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>Area<br><span>Huge Space</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Athorised Person</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Safe House</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Be Familiar website</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/video-frame.jpg" alt="">
            <a href="https://youtu.be/RLzC55ai0eo?si=6YZZa1aeJkN7hiFZ" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="0" data-speed="1000"></h2>
                  <p class="count-text ">Brokerage <br>Charges</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="9" data-speed="1000"></h2>
                  <p class="count-text ">Total Property<br>Onboarded</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                  <p class="count-text ">Total Client<br>Handled</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ashray";

        // Create connection
        $con = mysqli_connect($server, $username, $password, $dbname);

        // Check connection
        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data for display (limit to first 3 records)
        $query = "SELECT PropertyType, PurposeType, Name, PhoneNo, Rent, Address, PersonType, img1, img2, img3,city FROM details LIMIT 6";
        $result = mysqli_query($con, $query);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-lg-4 col-md-6">';
            echo  '<div class="item">';
            echo '<div class="swiper-container">';
            echo '<div class="swiper-wrapper">';

            // Display each image in a slide
            // echo '<div class="main-banner" >';


            echo '  <div class="owl-carousel owl-banner main-banner style="border-radius:10px; ">';

            for ($i = 1; $i <= 3; $i++) {
              $imagePath = 'images/' . $row['img' . $i];
              if (!empty($row['img' . $i]) && file_exists($imagePath)) {
                echo '<div class="swiper-slide""><img src="' . $imagePath . '" alt="" style="height: 265px; "></div>';
              }
            }




            echo '</div>';


            echo '</div>';
            echo '<span class="category">' . $row['PropertyType'] . '</span>';
            echo '<h6>' . $row['PurposeType'] . '</h6>';
            echo '<h4><a href="#">' . $row['Name'] . '</a></h4>';
            echo '<ul>';
            echo '<div class="dic">';
            echo '<li style="text-align: justify;">' . $row['Address'] . '</li>';
            // echo "Price=";
            // echo '<li>' . $row['Rent'] . '</li>';
            // echo "Allowed=";
            // echo '<li>' . $row['PersonType'] . '</li>';
            // echo "<br>Contact=";
            // echo '<li>' . $row['PhoneNo'] . '</li>';

            echo '<table class="property-table">';
            echo '<tr>';
            echo '<td class="table-label">Price:</td>';
            echo '<td class="table-data">' . $row['Rent'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td class="table-label">Allowed:</td>';
            echo '<td class="table-data">' . $row['PersonType'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td class="table-label">Contact No:</td>';
            echo '<td class="table-data">' . $row['PhoneNo'] . '</td>';
            echo '</tr>';


            echo '<tr>';
            echo '<td class="table-label">District:</td>';
            echo '<td class="table-data">' . $row['city'] . '</td>';
            echo '</tr>';


            echo '</table>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div></ul>';
          }

          mysqli_free_result($result);
        } else {
          echo 'Error: ' . mysqli_error($con);
        }

        mysqli_close($con);
        ?>

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
              slidesPerView: 1,
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          });
        </script>
      </div>
    </div>



  </div>
  </div>
  </div>
  </div>
  </div>
  </div>





  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>