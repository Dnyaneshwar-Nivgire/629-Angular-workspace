<?php
$server = "localhost";
$username = "root";
$password = "";
$dbnm = "ashray";

$con = mysqli_connect($server, $username, $password, $dbnm);

if (!$con) 
{

    echo "Error connecting to server" . mysqli_connect_error();
} 
else 
{
    // echo "Connecting to the server";
}

$message = "";

if (isset($_POST['sub'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM accountdb WHERE id='$id' AND password='$pass'";
    $result = mysqli_query($con, $sql);
    session_start();
    if (mysqli_num_rows($result) > 0) {
        
        $_SESSION['user']=$id;
        // Redirect to another page upon successful login
        header("Location: pAddpage.php");
        exit();
    } else {
        $message = "* Id and Password do not match.";
    }
    
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home Page</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main {
            width: 100vw;
            height: 100vh;
            /*background-image: url(home1.jpg);*/
            background: linear-gradient(to top, rgba(0, 0, 0, 0.2)50%, rgba(0, 0, 0, 0.2)50%), url(images/home1.jpg);
            background-size: cover;
            background-position: center;
        }

        .navbar {
            width: 100%;
            height: 70px;
            margin: auto;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.2)50%, rgba(0, 0, 0, 0.2)50%), url(tbackground.jpg);
            background-size: cover;

        }

        .icon {
            width: 200px;
            float: left;
            height: 70px;
        }

        .logo {
            color: rgb(192, 212, 218);
        
            font-size: 35px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            float: left;
            padding-left: 20px;
            padding-top: 10px;
            letter-spacing: 25px;
        
        }

        /*.hrline
       {

        padding-top: 80px;
        padding-left: 20px;
        padding-right: 20px;
       } */
       .listitem {
            width: 400px;
            height: 70px;
            float: left;
            margin-left: 35%;

        }

        ul {
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul li {
            list-style: none;
            margin-left: 50px;
            margin-top: 35px;
            font-size: 15px;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
            font-family: Arial;
            font-weight: bold;
            transition: 0.2s ease-in-out;
        }

        ul li a:hover {
            color: yellowgreen;
        }

        .search {
            width: 330px;
            float: left;
            
            margin-left: 75vw;
            position: absolute;
            top: 10px;
        }

        .srch {

            font-family: 'Arial';
            width: 230px;
            height: 40px;
            background: transparent;
            border: 1px solid orange;
            position: relative;
            
            margin-top: 5px;
            color: white;
            border-right: none;
            float: left;
            padding: 10px;
            border-bottom-left-radius: 50px;
            border-top-left-radius: 50px;
            font-size: 14px;
        }

        .btn {
            width: 100px;
            height: 40px;
            background-color: orange;
            border: 2px solid orange;
            margin-top: 5px;
            color: white;
            font-size: 15px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            cursor: pointer;
        }

        .btn:focus {
            outline: none;
        }

        .srch:focus {
            outline: none;
        }

        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #fff;
            float: left;
            position: relative;
            padding-top: 80px;

        }

        .para {
            padding-top: 10px;
        }

        .content .para {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h1 {
            font-family: 'Times New Roman';
            font-size: 50px;
            padding-left: 20px;
            letter-spacing: 2px;
            text-transform: capitalize;
        }

        div>h1>span {
            color: rgb(185, 161, 144);
            font-size: 60px;
        }

        .content .clickbtn {
            width: 160px;
            height: 40px;
            font-size: 18px;
            margin-bottom: 10px;
            margin-left: 20px;
            font-family: Arial, Helvetica, sans-serif;
            background: orange;
            border-radius: 30px;
            border: none;
            cursor: pointer;

        }

        .content .clickbtn a {
            text-decoration: none;
            color: #000000;
            transition: 0.3 ease;
        }

        .clickbtn:hover {
            background-color: #fff;
        }

        .form {
            width: 290px;
            height: 400px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8)50%, rgba(0, 0, 0, 0.8)50%);
            position: absolute;
            top: 100px;
            left: 70vw;
            border-radius: 20px;
            padding: 25px;

        }

        .form>h2 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(231, 155, 15);
            font-size: 22px;
            width: 220px;
            background-color: #fff;
            padding: 8px;
            margin: auto;
            border-radius: 50px;
        }

        .form input {
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid white;
            border-top: none;
            border-right: none;
            border-left: none;
            margin-top: 30px;
            font-size: 15px;
            letter-spacing: 1px;
            font-family: sans-serif;
            color: #fff;
        }

        ::placeholder {
            color: #fff;
        }

        .logbtn {
      width: 240px;
    }
    .logbtn input{
        
        height: 40px;
      background: orange;
      border: 1px solid black;
      margin-top: 20x;
      
      cursor: pointer;
      background:orange;
      color: black;
      font-size: 18px;
      font-weight: bold;
      border-radius: 50px;
    }


        .logbtn input:hover {
            background-color: white;
        }

        .form .link {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            padding-top: 20px;
            text-align: center;
        }

        .logbtnsec {
            width: 240px;
            height: 40px;
            border: 1px solid black;
            border-radius: 50px;
            background: orange;
            cursor: pointer;
            transition: 0.3 ease-in-out;
        }

        .logbtnsec a {
            text-decoration: none;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            color: #000000;
            font-weight: bold;
        }

        .logbtnsec:hover {
            background-color: white;
        }
        .msg
        {
            width: 240px;
            height: 30px;
            margin-bottom: -25px;
            margin-top:10px;
            color:red;
        }
    </style>
</head>

<body>
    <div class="main">


        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ASHRAY</h2>
            </div>

            <div class="listitem">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="properties.php">Properties</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="search">
                <input type="text" class="srch" placeholder="Type To Search...">
                <button class="btn">Search</button>
            </div>

        </div>


        <div class="content">
            <h1>Your dream <br> <span>space, one click</span><br>away</h1>
            <p class="para">Unlock the potential of your property! Create a new account or log in to your existing one to<br> showcase your rooms, bungalows, or flats for rent. Simply fill out our easy-to-use register <br> form and let your property shine. Join our community of landlords and connect with<br> potential renters effortlessly.</p>
            <button class="clickbtn"><a href="index.php">VISIT US</a></button>

            <div class="form">
                <h2>Login Here</h2>
                <form method="post">
                    <input type="email" name="id" placeholder="Enter Your Id" required>
                    <input type="password" name="pass" placeholder="Enter Password Here" required><br>
                    <div class="msg">

                        <script>
                            var message = "<?php echo $message; ?>";
                            if(message!="")
                            {
                                document.write(message);
                            }
                            </script>
                        </div>
    
    
                        <div class="logbtn">
                            <input type="submit" name="sub" value="Login">
                       </div>
                </form>
                <p class="link">Don't have an account </p><br>
                <button class="logbtnsec"> <a href="pCreateacc.php">Create Account</a></button>

            </div>
        </div>
    </div>
   <div>

      
   </div>
</body>
</html>
