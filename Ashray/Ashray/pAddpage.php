<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Property Page</title>
  <?php

    session_start();
  if (!isset($_SESSION['user'])) {
    header('location:loginpage.php');

    echo '<script>alert($_session[user])</script>';
    exit();
  }
  ?>
  <?php

  if (isset($_POST["logout"])) {
    session_destroy();
    header('Location: loginpage.php');
    exit();
  }
  ?>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .main {
      width: 100vw;
      height: 100vh;
      /*background-image: url(images/home1.jpg);*/
      background: url(images/a.jpg);
      background-size: cover;
      background-position: center;
    }

    .navbar {
      width: 100%;
      height: 50px;
      margin: auto
    }

    .navbar>span {
      color: #ffffff;
      color: rgb(192, 212, 218);
      font-size: 40px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 10px;
      margin-left: 30%;
      letter-spacing: 30px;
      font-weight: bold;
    }

    .navbar>button {
      width: 100px;
      height: 40px;
      background-color: orange;
      border: 1px solid orange;
      margin-top: 15px;
      margin-bottom: 15px;
      border-radius: 50px;
      transition: 0.3 ease-in-out;
    }

    .navbar>button:hover {
      color: black;
      background: #ffffff;
    }

    .navbar>button>a {
      font-size: 15px;
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: none;
    }

    a {
      color: rgb(0, 0, 0);

    }

    .innerframe {
      width: 450px;
      min-height: 600px;
      background: linear-gradient(to top, rgba(200, 192, 192, 0.3)50%, rgba(200, 192, 192, 0.3)50%);
      margin-top: 50px;
      margin-left: 60vw;
      align-items: center;
      border-radius: 20px;

      background-position: center;
    }

    .cantant {
      border: 1px solid black;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7)50%, rgba(0, 0, 0, 0.7)50%), url(Addp.jpg);
      background-size: cover;
      position: relative;
      width: 80%;
      height: 100%;
      top: 1%;
      border-radius: 20px;
      padding: 10px;
      margin: auto;

    }

    .cantant>h2 {
      margin: auto;
      width: 300px;
      height: 50px;
      padding-top: 10px;
      text-align: center;
      font-family: Arial;
      margin-bottom: 10px;
      border-radius: 20px;
      border: 1px solid rgb(255, 255, 255);
      background: #ffffff;
      color: orange;
      letter-spacing: 2px;
    }

    .cantant label {
      margin-top: 10px;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: sans-serif;
      color: #ffffff;
    }

    .info input {
      width: 260px;
      height: 35px;
      background: transparent;
      border: 1px solid rgb(254, 254, 254);
      border-top: none;
      border-right: none;
      border-left: none;
      margin-top: 10px;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: sans-serif;
      margin-left: 10px;
      color: white;
    }

    .addrs label {
      position: relative;
      top: -20px;
    }

    .addrs textarea {
      margin-top: 10px;
      width: 75%;
      border-radius: 10px;
      color: #ffffff;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: sans-serif;
    }

    .filealign {
      margin-top: 10px;
      font-family: sans-serif;
    }

    .filealign>.img {
      background: linear-gradient(top, #ffffff, #e3e3e3);
      border: 1px solid #ffffff;
      border-radius: 3px;
      padding: 5px 8px;
      color: #ffffff;

      width: 200px;
    }

    #Person {
      margin-top: 5px;
      font-family: sans-serif;
      margin-bottom: 10px;

    }

    #Type {
      width: 120px;
      height: 30px;
      text-align: center;
      border-radius: 10px;
      font-weight: bold;
    }

    #Purpose {
      width: 120px;
      height: 30px;
      text-align: center;
      border-radius: 10px;
      font-weight: bold;
    
    }
    #City {
      width: 120px;
      height: 30px;
      text-align: center;
      border-radius: 10px;
      font-weight: bold;
      margin-top: 10px;
    }

    #Person {
      width: 120px;
      height: 30px;
      text-align: center;
      border-radius: 10px;
      font-weight: bold;
    }

    .btn {
      width: 240px;
      height: 50px;

      margin: 20px auto;
    }

    button {
      width: 90px;
      height: 40px;
      margin-left: 20px;
      border: none;
      color: #ffffff;
      background: orange;
      border-radius: 50px;
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      transition: 0.3 ease-in-out;
      cursor: pointer;
    }

    button:hover {
      color: black;
      background: #ffffff;
    }

    ::placeholder {
      color: #ffffff;
      font-size: 12px;
      letter-spacing: 1px;
      font-family: sans-serif;

    }

    .sub {
      width: 90px;
      height: 40px;
      margin-left: 20px;
      border: none;
      color: #ffffff;
      background: orange;
      border-radius: 50px;
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      transition: 0.3 ease-in-out;
      cursor: pointer;
    }

    .sub:hover {
      color: black;
      background: #ffffff;
    }

    .text {
      width: 60%;
      height: 500px;
      margin: auto;
      color: rgb(255, 255, 255);
      float: left;
      position: relative;
      top: 10%;

    }

    .text h1 {
      font-family: 'Times New Roman';
      font-size: 50px;
      padding-left: 20px;
      letter-spacing: 2px;
      text-transform: capitalize;
    }

    div>h1>span {
      color: yellow;
      font-size: 60px;
    }

    .report {
      height: 18%;
      width: 55%;
      float: left;
      margin-left: 10px;
      padding-top: 10px;
      padding-left: 10px;

      position: absolute;
      top: 82%;
      text-transform: capitalize;
      font-family: 'Times New Roman';
      letter-spacing: 2px;
      font-size: 20px;
      color: white;


    }

    .report>p {
      margin-top: 10px;
      color: yellow;
      font-size: 22px;
    }

     .logout
     {
      float:right;
     margin-top:-55px ;
     margin-right: 20px;
     background-color: orange;
     color: white;
     border: 2px solid white;
     }
  </style>

</head>

<body>


  <div class="main">
    <div class="navbar">
      <button><a href="loginpage.php">Back</a></button><span>ASHRAY</span>
      <form method="post" action="">
        <button type="submit"class="logout" name="logout">Logout</button>
      </form>

      <hr>

    </div>

    <div class="text">
      <h1>Home is where <br><span>the heart is, and we've got </span>the perfect match for yours!</h1>

    </div>

    <div class="report">
      Need changes to your listed property? Easy! Navigate to 'Contact Us,' fill in your name, contact no, and detail adjustments in the suggestion field.<p> After submitting the feedback form, we'll promptly reach out to you using the provided phone number and send you an updated report.</p>
    </div>
    <form action="#" method="POST" enctype="multipart/form-data" >

      <div class="innerframe">

        <div class="cantant">

          <h2 class="Micon">Details</h2>

          <div class="TypeP">

            <label for="Type">Type :</label>
            <select name="Type" id="Type">
              <option value="Bungalows ">Bungalows </option>
              <option value="Rooms" selected>Rooms</option>
              <option value="Flats">Flats</option>
            </select>

            <select name="purpose" id="Purpose">
              <option value="sell">Sell</option>
              <option value="rent">Rent</option>
        
            </select><br>

            <label for="city">District :</label>  
            <select name="City" id="City">
              <option value="Kolhapur ">Kolhapur</option>
              <option value="Sangli" selected>Sangli</option>
              <option value="Satara">Satara</option>
              <option value="Pune">Pune</option>
            </select>
          </div>

          <div class="info">
            <label for="Name">Name :</label>
            <input type="text" id="Name" name="Name" placeholder=" Enter Name Here" required>
          </div>

          <div class="info">
            <label for="ContactNo">Ph.No :</label>
            <input type="number" id="ContactNo" name="ContactNo" placeholder=" Enter Contact No" required>
          </div>
          <div class="info">
            <label for="Rent">Price &nbsp;:&nbsp</label>
            <input type="text" id="Rent" name="rent" placeholder=" Enter Your Rent/Price Here">
          </div>



          <div class="addrs">
            <label for="address">Details :</label>
            <textarea id="address" name="address" rows="3" style="background-color: transparent; border:1px solid white;" placeholder=" Enter Property Details And Address &nbsp;min 3 lines" required></textarea>
          </div>

          <div class="personType">
            <label for="Person">Person Type :</label>
            <select name="Person" id="Person">
              <option value="No_select">Select</option>pt
              <option value="Males">Male</option>
              <option value="Female">Female</option>
              <option value="Family">Family</option>
            </select>
          </div>

          <div class="imgs">
            <label>Upload image :</label>
          </div>
          <div class="filealign">
            <label for="img2">Image 1:</label>
            <input type="file" id="file1" name="file1" class="img" required><br>
          </div>
          <div class="filealign">
            <label for="img2">Image 2:</label>
            <input type="file" id="file2" name="file2" class="img" required><br>
          </div>
          <div class="filealign">
            <label for="img2">Image 3:</label>
            <input type="file" id="file3" name="file3" class="img" required><br>
          </div>
<br>
          <div class="imgs">
            <label>Property DOC:</label>
          </div>
          <div class="filealign">
            <label for="img4">Image 1:</label>
            <input type="file" id="file4" name="file4" class="img" required><br>
          </div>
          
          <div class="btn">
            <!-- <button type="submit" class="sub">Add</button> -->
            <input type="submit" class="sub" name="sub" value="Add" onclick="fun()">
            <button type="reset" class="re">Clear</button>
          </div>
    </form>
  </div>

  </div>
  </div>
  <script>
    function fun() {
     
      alert("Data inserted successfully");
    }
  </script>
 
</body>

</html>

<?php


$server = "localhost";
$username = "root";
$password = "";
$dbnm = "ashray";

$con = mysqli_connect($server, $username, $password, $dbnm);

if (!$con) {
  echo "Error connecting to server" . mysqli_connect_error();
} else {
  // echo "Connecting to server";
}

if (isset($_POST['sub'])) {
  $ptype = $_POST['Type'];
  $Purpose = $_POST['purpose'];
  $nm = $_POST['Name'];
  $ph = $_POST['ContactNo'];
  $rent = $_POST['rent'];
  $add = $_POST['address'];
  $gen = $_POST['Person'];
  $city= $_POST['City'];

  // File handling
  $file1 = $_FILES['file1']['name'];
  $file2 = $_FILES['file2']['name'];
  $file3 = $_FILES['file3']['name'];
  $file4 = $_FILES['file4']['name'];

  // Move uploaded files to a destination folder
  $uploadDirectory = "images/"; // Change this to your desired folder
  move_uploaded_file($_FILES['file1']['tmp_name'], $uploadDirectory . $file1);
  move_uploaded_file($_FILES['file2']['tmp_name'], $uploadDirectory . $file2);
  move_uploaded_file($_FILES['file3']['tmp_name'], $uploadDirectory . $file3);
  move_uploaded_file($_FILES['file4']['tmp_name'], $uploadDirectory . $file4);

  $sql = "INSERT INTO details (PropertyType, PurposeType, Name, PhoneNo, Rent, Address, PersonType, img1, img2, img3, Date, city, img4) VALUES ('$ptype', '$Purpose', '$nm', '$ph', '$rent', '$add', '$gen', '$file1', '$file2', '$file3', NOW(), '$city', '$file4')";

  // $data = mysqli_query($con, $query);

  if ($con->query($sql) == true) {
    // echo "Data inserted successfully";
  } else {
    echo "Error inserting data: " . mysqli_error($con);
  }

  $con->close();
}
?>