<?php
$server = "localhost";
$username = "root";
$password = "";
$dbnm = "ashray";

$con = mysqli_connect($server, $username, $password, $dbnm);

if (!$con) {
    echo "Error connecting to the server" . mysqli_connect_error();
} else {
    // echo "Connected to the server";
}

$message = ""; // Variable to store alert message

// Check if the form for identity proof is submitted
if (isset($_FILES['identityProof']) && $_FILES['identityProof']['error'] === UPLOAD_ERR_OK) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["identityProof"]["name"]);

    if (move_uploaded_file($_FILES["identityProof"]["tmp_name"], $targetFile)) {
        // File uploaded successfully, you can save the file path in the database or process it further
        $message .= "Identity Proof uploaded successfully.";
    } else {
        $message .= "Error uploading file.";
    }
}

if (isset($_POST['sub'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $confirmpass = $_POST['confirmpass']; // New field for confirm password

    // Check if username already exists
    $check_query = "SELECT * FROM accountdb WHERE id='$id'";
    $result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($result) > 0) {
        $message = "* Username already exists. Please choose a different username.";
    } elseif ($pass !== $confirmpass) {
        $message = "* Password and Confirm Password do not match.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO accountdb (id, password, identy, date) VALUES ('$id', '$pass', '$targetFile', NOW());";

        if ($con->query($sql) === true) {
            $message = "Account created successfully.";
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
    <title>Create Account</title>
    <!-- Your existing styles... -->
    <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .main {
      width: 100vw;
      height: 100vh;
      background: url(images/3060243.jpg);
      background-size: cover;
      background-position: center;
    }

    .navbar {
      width: 100%;
      height: 50px;
      margin: auto;

    }

    .navbar>span {
      color: rgb(192, 212, 218);
      font-size: 40px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 10px;
      margin-left: 31%;
      letter-spacing: 40px;
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

    .form {
      width: 290px;
      min-height: 400px;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.9)50%, rgba(0, 0, 0, 0.9)50%);
      position: absolute;
      top: 150px;
      left: 40%;
      ;
      border-radius: 20px;
      padding: 25px;
      border: 1px solid rgb(248, 248, 248);
      box-shadow: 5px 5px 5px rgb(255, 255, 255);
    }

    .form h2 {
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      color: rgb(219, 169, 82);
      font-size: 22px;
      width: 220px;
      background-color: #ffffff;
      padding: 8px;
      margin: auto;
      border-radius: 50px;
    }

    .form input   {
      width: 240px;
      height: 35px;
      background: transparent;
      border-bottom: 1px solid white;
      border-top: none;
      border-right: none;
      border-left: none;
      margin-top: 20px;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: sans-serif;
      color: #fff;
    }

    .form ::placeholder {
      color: #fff;
    }

    .logbtn {
      width: 240px;
      height: 50px;
    }
    .logbtn input{
      
      background: orange;
      border: 1px solid black;
      margin-top: 10px;
      
      cursor: pointer;
      background:orange;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      border-radius: 50px;
    }
    

    ul li {
      margin-top: 10px;
      font-size: 12px;
      letter-spacing: 1px;
      font-family: sans-serif;
      color: rgb(128, 255, 73);
      margin-left: 20px;
      text-transform: capitalize;
    }

    .newId {
      margin-bottom: 10px;
    }

   
    .msg
        {
            width: 240px;
            height: 30px;
            
            margin-top:5px;
            color:red;
        }
        .file
        {
            display: flex;
        }
       .file > label{
            margin-top: 20px;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: sans-serif;
      color: #fff;

        }
        .file >input
        {
          text-decoration: none;
          border:1px solid black;
          margin-left: 10px;
          margin-bottom: -7px;
        
        }
        .condition
        {
          display: flex;
        }
       .tc{
        color:#fff;
        margin-top: -20px;
        
       }
       .tc >span>  a{
        color:blue;   }
        .con
        {
          color:#fff;
        }
       .tc >input
       {
        width: 15px;
        
       }
       #df
       {
        position: relative;
        top:-13px;
       }
  </style>
</head>

<body>
    <div>
        <div class="main">
            <div class="navbar">
                <button><a href="loginpage.php">Back</a></button><span>ASHRAY</span>
                <hr>
            </div>

            <div class="content">
                <div class="form">
                    <form method="POST" enctype="multipart/form-data">
                        <h2>Create Account</h2>
                        <input type="email" class="classId" name="id" placeholder="Enter Your New User Account" required>
                        <input type="password" class="pass" name="pass" placeholder="Create Password Here" required>
                        <input type="password" name="confirmpass" placeholder="Confirm Password Here" required><br>
                    <div class="file" >

                           <label for="">Adhar:</label> <input type="file" name="identityProof" required style="cursor: pointer;" >
                        </div>
                        <div class="msg">
                            <script>
                                var message = "<?php echo $message; ?>";
                                if (message != "") {
                                    document.write(message);
                                }
                            </script>
                        </div>
                        <ul>
                            <li>use at least 1 upper case</li>
                            <li>use at least 1 number</li>
                            <li>space not allowed </li>
                        </ul>
                      <div class="condition">

                        <div class="tc">
                          <input type="checkbox" required style="cursor: pointer;">
                          <span id="df">agree&nbsp;terms&nbsp;and&nbsp;<a href="terms.html">conditions</a></span>
                        </div>
                      
                           
                      </div>
                        <div class="logbtn">
                          <input type="submit" name="sub" value="Create">
                      </div>          
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
