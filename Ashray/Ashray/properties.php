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

// Fetch data for display
$query = "SELECT PropertyType, PurposeType, Name, PhoneNo, Rent, Address, PersonType, img1, img2, img3,city FROM details";
$result = mysqli_query($con, $query);

$propertyItems = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $propertyItems[] = [
            'PropertyType' => $row['PropertyType'],
            'PurposeType' => $row['PurposeType'],
            'Name' => $row['Name'],
            'PhoneNo' => $row['PhoneNo'],
            'Rent' => $row['Rent'],
            'Address' => $row['Address'],
            'PersonType' => $row['PersonType'],
            'img1' => $row['img1'],
            'img2' => $row['img2'],
            'img3' => $row['img3'],
            'city' =>$row['city']
        ];
    }

    mysqli_free_result($result);
} else {
    echo 'Error: ' . mysqli_error($con);
}

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content here -->



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
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<style>
    
    select
    {
    
      border-radius: 10px;
      width: 200px;
      height: 40px;
      font-size: 20px;
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
      background: rgb(255, 255, 255);
      color: rgb(23, 155, 56);
      
      text-align: center;
      margin-left: 110px;

    }
      .submit
      {
      border-radius: 20px;
      width: 80px;
      height: 38px;
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      background: orange;
      border: 1px solid orange;
      color: white;
      
      text-align: center;
      transition: 0.3 easy;
      }

      .submit:hover
      {
        background:green;
        
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
        
        .items
          {
          background-color: #fafafa;
          border-radius: 10px;
          padding: 30px;
          margin-bottom: 30px;
         }
    .items img
    {
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
      .property-table td {
        border: 1px solid #ccc;
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
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3 style="margin-bottom: 30px;">Properties</h3>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Your body content here -->
  
  <div class="select" style="margin-bottom: 70px;">
  <form action="#" method="POST">
    <div class="select" style="margin-bottom: 70px;">
        <select name="selectedValue" id="propertyTypeDropdown">
            <option value="No select">Show All</option>
            <option value="Bungalows">Bungalows</option>
            <option value="Rooms">Rooms</option>
            <option value="Flats">Flats</option>
        </select>
        <input type="submit" class="submit" value="Submit">
    </div>
</form>

  </div>
  
  <div class="properties section">
    <div class="container">
      <div class="row" id="propertyItemsContainer">
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
 
$selectedValue = isset($_POST['selectedValue']) ? $_POST['selectedValue'] : 'No select';



// Fetch filtered data for display
if ($selectedValue === "No select") {
    $query = "SELECT PropertyType, PurposeType, Name, PhoneNo, Rent, Address, PersonType, img1, img2, img3,city FROM details";
} else {
    $query = "SELECT PropertyType, PurposeType, Name, PhoneNo, Rent, Address, PersonType, img1, img2, img3,city FROM details WHERE PropertyType = '$selectedValue'";
}

$result = mysqli_query($con, $query);

$filteredPropertyItems = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $filteredPropertyItems[] = [
            'PropertyType' => $row['PropertyType'],
            'PurposeType' => $row['PurposeType'],
            'Name' => $row['Name'],
            'PhoneNo' => $row['PhoneNo'],
            'Rent' => $row['Rent'],
            'Address' => $row['Address'],
            'PersonType' => $row['PersonType'],
            'img1' => $row['img1'],
            'img2' => $row['img2'],
            'img3' => $row['img3'],
            'city' =>$row['city']
        ];
    }

    mysqli_free_result($result);
} else {
    echo 'Error: ' . mysqli_error($con);
}

mysqli_close($con);

foreach ($filteredPropertyItems as $item) : ?>
    <div class="col-lg-4 col-md-6" data-property-type="<?= $item['PropertyType']; ?>">
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="owl-carousel owl-banner main-banner">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <?php
                        $imagePath = 'images/' . $item['img' . $i];
                        if (!empty($item['img' . $i]) && file_exists($imagePath)) : ?>
                            <div class="swiper-slide"><img src="<?= $imagePath; ?>" alt="" style="height: 265px;"></div>
                        <?php endif; ?>
                    <?php endfor; ?>
                 </div>
                </div>
                <span class="category"><?= $item['PropertyType']; ?></span>
                <h6><?= $item['PurposeType']; ?></h6>
                <h4><a href="#"><?= $item['Name']; ?></a></h4>
                <ul>
                    <div class="dic" style="text-align: justify;">
                       <li><?= $item['Address']; ?></li>
                     
                        <table class="property-table">

                        <tr>
                          <td class="table-label">District:</td>
                          <td class="table-data"><?= $item['city']; ?></td>
                        </tr>
                  <tr>      
                    <td class="table-label">Price:</td>
                    <td class="table-data"><?= $item['Rent']; ?></td>
                </tr>
                <tr>
                    <td class="table-label">Allowed:</td>
                    <td class="table-data"><?= $item['PersonType']; ?></td>
                </tr>
                <tr>
                    <td class="table-label">Contact No:</td>
                    <td class="table-data"><?= $item['PhoneNo']; ?></td>
                </tr>
            </table>
                    </div>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach; ?>

                  </div>
                  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script>
              $(document).ready(function() {
                $('#propertyTypeDropdown').change(function() {
                  var selectedValue = $(this).val();
                  $.ajax({
                    type: 'POST',
                    url: 'filter_properties.php', // Create a new PHP file for filtering, see below
                    data: {
                      selectedValue: selectedValue
                    },
                    success: function(data) {
                      $('#propertyItemsContainer').html(data);
                    }
                  });
                });
              });

              document.addEventListener('DOMContentLoaded', function () {
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

    <!-- Your script and closing body/html tags here -->
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
