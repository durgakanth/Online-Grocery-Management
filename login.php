<?php
if (isset($_POST['email'])) {
    $host = 'localhost';
    $username = 'system';
    $password = 'harish';
    $database = 'reg';

    // Attempt to connect to the database
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT email, pass FROM reg1 WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['pass']; // Use the correct column name "pass" from the database

        if ($pass== $hashed_password) {
            header("Location: store.php");
            echo "hello";
            exit();
        } else {
            echo "Password incorrect<br>";
        }
    } else {
        echo "User doesn't exist";
    
    }

    mysqli_close($conn);
}
?>
<html>
  <head>
  <link rel="stylesheet" href="Store.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f84e312a46.js" crossorigin="anonymous"></script>
    <title>Login Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        *{
            font-family: 'Open Sans', sans-serif;
        }
        .heading {
        color: black;
        font-size: 40px;
        font-family: "Palatino Linotype";
        font-weight: bolder;
        padding-top:220px;
        }

        .para {
        color: black;
        font-size: 25px;
        font-family: "Palatino Linotype";
        font-weight: 300;
        }
        
        .background{
            background-image: url("https://i.pinimg.com/564x/af/88/b8/af88b830ede446f4f52bfd380875b456.jpg");
            background-size: cover;
            height:100vh;
            width:60vw;
        }

        .navbar-nav .nav-link {
           display: flex;
           flex-direction: column;
           align-items: center;
           text-align: center;
           padding: 5px;
           margin-left:10px;
         }
        
         .food-munch-logo{
            height: 90px;
            width: 220px;
            border-radius: 20px;
        }
		.bd{
			border: none;
            width: 40vw;
            height:87vh;
            background: linear-gradient(#fff8db,purple);
            color: black;
            display: flex;
            flex-direction: column;
            padding:50px 10px;
            margin-top: 100px;

		}
        #namm{
            padding:15px;
            border-radius:10px;
            width: 300px;
            border: none;
        }
        #pass{
            padding: 15px;
            width: 300px;
            border-radius: 10px;
            border: none;

        }
        #sub{
            background-color: transparent;
            padding: 10px;
            width: 100px;
            border-radius: 10px;
            border: none;
            color: white;
            border-color:white;
            border-style:solid;
            text-align: center;
  
        }
	</style>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="d-flex flex-row">
                <img src="C:\Users\sahit\OneDrive\Pictures\fl1.jpg" class="food-munch-logo" />
                
            </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" id="Navitem1" href="#wcuSection"> <span class="sr-only">(current)</span></a>
                    <a class="nav-link active" id="Navitem1" href="https://www.google.co.in/maps">
                        <i class="fas fa-location"></i>Locate me<span class="sr-only">(current)</span>
                      </a>
                      
                      <a class="nav-link" id="Navitem2" href="">
                        <i class="fas fa-compass"></i> Explore
                      </a>
                      
                      <a class="nav-link" id="Navitem3" href="">
                        <i class="fas fa-truck"></i> Delivery & Payment
                      </a>
                      
                      <a class="nav-link" id="Navitem4" href="">
                        <i class="fas fa-shopping-cart"></i> My Cart
                      </a>
                      
                      <a class="nav-link" id="Navitem5" href="">
                        <i class="fab fa-twitter"></i> Follow Us
                      </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-row">
        <div class="background d-flex flex-column justify-content-center">
            <div class="text-center">
                <h1 class="heading mb-3">Nourishing Nature's Bounty!</h1>
                <p class="para mb-4">Experience the Joy of Shopping and Nourishing Your Soul,<br> One Cart at a Time.</p>>
            </div>
        </div>


     <div class="d-flex flex-row justify-content-end">
      <form action="login.php" method="post">
        <div class="bd">
         <h1>Login</h1>
         <br>
         <input type="text" name="email" id="namm" placeholder="Enter email or contact"><br><br>
         <input type="password" name="pass" id="pass" placeholder="Enter password "><br><br>
         <button id="sub"> Submit</button><br><br>
         <a href="#" style="color: white;">forgot password</a>
        </div> 
       </form>
     </div>
    </div>
    
</body>
</html>