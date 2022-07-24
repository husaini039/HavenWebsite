<?php
include 'config.php';
session_start();

if(isset($_POST['login'])){

   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $pass = mysqli_real_escape_string($conn,($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `userinformation` WHERE email = '$email' AND password = '$pass'") or die ('query failed');
   $user = mysqli_fetch_assoc($select);
   // $row = mysqli_fetch_array($select);

   if(is_array($user)){ 
      $_SESSION['user'] = $user['id'];  
      if(isset($_SESSION["user"])){
         header('location:index.php');
         $message[] = 'Login Succeed!';
         
      }
      
   }else{
      $message[] = 'incorrect password or email!';
   }
 
   // $message[] = 'Login Succeed!';

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
<div class="container" id="container" >
      <div class="incontainer" style="height: 500px;">

      <div class="title-bar">
            <div class="title-bar-text">Kasut Haven</div>
            <div class="title-bar-controls">
               <button aria-label="Maximize" id="change"></button>
               <button aria-label="Close" id="close"></button>
            </div>
         </div>
         <div class="title">

            <header>
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
                        <a href="register.php" id="register">Create Account</a>
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

      <div class="windowx" style="width: 500px;">
         <div class="title-bar">
            <div class="title-bar-text">LOGIN PAGE</div>
            <div class="title-bar-controls">
               <a href="index.php"><button aria-label="Maximize" id="loginHome"></button></a>
            </div>
         </div>
         <div class="window-body">
            <form action="" method="post">
            <h5>EMAIL</h5>
            <input type="email" name="email" id="email"  required placeholder="enter your email" style="width: 255px;"> <br>
            <br>
            <h5>PASSWORD</h5>
            <input type="password" name="password" id="password" required placeholder="password" style="width: 255px;"> <br>
            <br><button type="submit" name="login" id="btnSignIn">SIGN IN</button>
            </form>
            
         </div>
      </div>
      </div>
</div>
</body>

</html>