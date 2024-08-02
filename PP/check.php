<?php
$submit="False";
if(isset($_POST['fname'])==true){
    // Define credentials securely (consider using environment variables)
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
    $fname=$_POST['fname'];
    $cont=$_POST['cont'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $sql = "INSERT INTO `reg1` (`fname`, `cont`, `pass`, `email`) VALUES ('$fname', '$cont', '$pass', '$email');";
    if ($conn->query($sql)==true) {
        $submit="True";
        header("Location: login.php");
        exit();
    }
    else {
        echo"Error :$sql <br> $con->error";   
    }
    $conn->close();
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
    <title>Registration form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');

        * {
          font-family: "roboto";
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

        .bd {
            border: none;
            width: 40vw;
            height:87vh;
            background: #ffe8ee;
            color: black;
            display: flex;
            flex-direction: column;
            padding:50px 10px;
            margin-top: 100px;

        }

        .inp {
            padding: 10px;
            width: 300px;
            border-radius: 10px;
            border: none;
            color: #002661;
            margin:8px auto;
        }

        #sub {
            background-color: transparent;
            padding: 10px;
            width: 300px;
            border-radius: 10px;
            border: solid;
            color: white;
            margin-left: 35px;
            border-color: white;
            width: 150px;
        }
        #disc{
            width:320px;
            margin: auto;
            border-radius: 10px;
        }
    </style>
</head>

<body> 
    

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="d-flex flex-row">
                <img src="fl1.jpg" class="food-munch-logo" />
                
            </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" id="Navitem1" href="#wcuSection"> <span class="sr-only">(current)</span></a>
                    
                    
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
    <form action="check.php" method="post"onsubmit="return validateForm()">
        <div class="bd">
            <br><br>
                <h1 style="text-align: center; font-family:Times new roman;" >Registration Form</h1>
                <br><br>
                <input type="Text" id="Name" class="inp" name="fname" placeholder="Enter your Firstname ">
                <input type="Text" id="cont" class="inp" name="cont" placeholder="Enter contact">
                <input type="Password" id="pass" class="inp" name="pass" placeholder="Enter Password ">
                <input type="text" id="Email" class="inp" name="email" placeholder="Enter Email"><br>
                <div class="d-flex flex-row justify-content-center">
                    <button id="sub" style="background-color:#fc6c85;"> Submit</button>
                </div>
        </div>
                
        </div>
    </div>
    </form>
</div>  
</div>


   

    <script>
        var submitValue = "<?php echo $submit; ?>";

        function validateForm(){
            var Name=document.getElementById('Name').value;
            var cont=document.getElementById('cont').value;
            var pass=document.getElementById('pass').value;
            var email=document.getElementById('Email').value;
            
            if(!Name ||!cont||!pass||!email){
                alert('All fields are required');
                return false;

            }
            var emailPattern=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailPattern.test(email)){
                alert('please enter a valid email adress');
                return false;

            }
            if (pass.length<5){
                alert('password must be atleast 5 characters long');
                return false;
            }
            if(cont.length!=10){
                alert('please enter a valid contact number');
                return false;
               
        }
        return true;
    }
    if (submitValue === "True") {
        // Display a success message or perform other actions
        console.log("Form submitted successfully!");
        // Redirect the user to the login page after a successful form submission
        
    }
        
    
        
    </script>
</body>
</html>

    
