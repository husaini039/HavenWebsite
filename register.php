<?php
require 'config.php';

if (isset($_POST['submit'])) {
   $name = $_POST["name"];
   $age = $_POST["age"];
   $address = $_POST["address"];
   $phoneNumber = $_POST["phoneNum"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $postalCode = $_POST["postC"];
   $country = $_POST["country"];
   $city = $_POST["city"];
   $state = $_POST["state"];

   $double = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM userinformation WHERE email == '$email'"));

   if (isset($double)) {
      echo "<script>alert('email has exist')</script>";
   } else {
      $query = "INSERT INTO userinformation VALUES('','$name','$age','$address','$phoneNumber','$email','$password','$postalCode','$country','$city','$state')";

      mysqli_query($conn, $query);
      header("Location: login.php");
      echo "<script>alert('REGISTER SUCCESS! ')</script>";
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="stail.css">
   <link rel="stylesheet" href="https://unpkg.com/98.css">
   <script src="ECOMM/script.js"></script>


   <title>Kasut Haven</title>
</head>

<body>

<?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
      }
   }
   ?>
   <div class="container" id="container" style="text-align: center;">
      <div class="incontainer" style="height: 1000px;">

         <div class="title-bar">
            <div class="title-bar-text">Kasut Haven</div>
            <div class="title-bar-controls">
               <button aria-label="Maximize" id="change"></button>
               <button aria-label="Close" id="close"></button>
            </div>
         </div>
         <div class="title">

            <header>
               <!-- <img class="logo" src="img/kasutheven1.png" alt="logo"> -->
               <nav>
                  <ul class="navLinks">
                  <li><a href="index.php" id="home">Home</a></li>
                  <li><a href="nikeMan.php">Man</a></li>
                     <li><a href="nikeWoman.php">Women</a></li>
                     <li><a href="faq.php" id="btnFaq">FAQ</a></li>
                    
                     <li><a href="team.html">Teams</a></li>
                  </ul>
               </nav>

               <div class="logo1">
                  
                  <div class="logo2">
                     <a href="#" class="profile">
                        <i class="fas fa-user-circle"></i>
                     </a>
                     <div class="dropdown-content">
                        <a href="login.php" id="login">Log in </a>
                        <a href="#" id="register">Create Account</a>
                        <a href="logout.php" id="register">Logout</a>
                        <!-- <a href="#">Profile Details</a> -->
                     </div>
                  </div>
                  <a href="search.php" class="search">
                     <i class="fas fa-search"></i>
                  </a>
                  <a href="cart.php" class="shop">
                     <i class="fas fa-shopping-cart"></i>
                  </a>
               </div>
            </header>
         </div>

         <div class="regWindow" style="width: 400px">
            <div class="title-bar">
               <div class="title-bar-text">REGISTER PAGE</div>
               <div class="title-bar-controls">
                  <a href="index.php"><button aria-label="Maximize" id="loginHome1"></button></a>
               </div>
            </div>
            <div class="window-body">
               <form action="" method="POST">
                  <h5>NAME</h5>
                  <input type="text" name="name" id="name" required placeholder="Enter your name here" style="width: 255px;"> <br>
                  <br>
                  <h5>AGE</h5>
                  <input type="text" name="age" id="age" required placeholder="Enter your age here" style="width: 255px;"> <br>
                  <br>
                  <h5>ADDRESS</h5>
                  <input type="text" name="address" id="address" required placeholder="Enter your address here" style="width: 255px;"> <br>
                  <br>
                  <h5>PHONE NUMBER</h5>
                  <input type="text" name="phoneNum" id="phoneNum" required placeholder="Enter your phone number here" style="width: 255px;"> <br>
                  <br>
                  <h5>EMAIL</h5>
                  <input type="email" name="email" id="regEmail" required placeholder="Enter your email here" style="width: 255px;"> <br>
                  <br>
                  <h5>PASSWORD</h5>
                  <input type="password" name="password" id="regPassword" required placeholder="Password here" style="width: 255px;"> <br>
                  <br>
                  <h5>POSTAL CODE</h5>
                  <input type="text" name="postC" id="postC" required placeholder="Enter your postal code here" style="width: 255px;"> <br>
                  <br>
                  <h5>COUNTRY</h5>
                  <input type="text" name="country" id="country" required placeholder="Enter your country here" style="width: 255px;"> <br>
                  <br>
                  <h5>CITY</h5>
                  <input type="text" name="city" id="city" required placeholder="Enter your city here" style="width: 255px;"> <br>
                  <br>
                  <h5>STATE</h5>
                  <input type="text" name="state" id="state" required placeholder="Enter your state here" style="width: 255px;"> <br>
                  <br>


                  <br><button type="submit" name="submit" id="btnReg">CREATE ACCOUNT</button>
               </form>

            </div>
         </div>

      </div>
   </div>
</body>

</html>