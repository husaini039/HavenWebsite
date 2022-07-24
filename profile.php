<?php
include 'config.php';
session_start();
$id = $_SESSION['user'];
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
   <div class="container" id="container">
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


         <div class="box">
            <?php
            $user_querey = mysqli_query($conn, "SELECT * FROM `userinformation` WHERE id = '$id'") or die('query failed');
            if (mysqli_num_rows($user_querey) > 0) {
               while ($fetch_user = mysqli_fetch_assoc($user_querey)) {
            ?>


                  <div class="window" style="width: 800px">
                     <div class="title-bar">
                        <div class="title-bar-text">User Information</div>
                        <div class="title-bar-controls">

                           <button aria-label="Close"></button>
                        </div>
                     </div>
                     <div class="window-body">
                        <p>Account Details</p>
                        <p> Welcome: <span><?php echo $fetch_user['name'] ?></span> </span></p>
                        <p>Email: <span><?php echo $fetch_user['email'] ?></span> <br> Phone: <span><?php echo $fetch_user['phoneNumber'] ?></span></p>
                        <div class="btnHide">
                           <p>View Address</p>
                           <p>Billing Address: <span><?php echo $fetch_user['address'] ?></span></p>
                           <p>Postcode: <span><?php echo $fetch_user['postalCode'] ?></span> &nbsp; City: <span><?php echo $fetch_user['city'] ?></span> &nbsp; State: <span><?php echo $fetch_user['state'] ?></span></p>
                        </div>
                     </div>
                  </div>



            <?php };
            }; ?>
         </div>

         <style>
            .window {
               position: relative;
               top: 50px;
               left: 320px;
            }

            p {
               font-size: 40px;
               color: black;
               padding: 10px 0;
               background-image: linear-gradient(to right, #3f63c2, #7746c3);
               color: black;

            }

            p span {
               text-decoration: underline;
               color: #e3e3e3;
            }

            .btHome {
               margin: 24px;
               width: 70%;
               height: 40px;
               font-size: 25px;
               background-image: linear-gradient(to right, #3f63c2, #7746c3);
               color: white;
            }
         </style>



      </div>
   </div>
</body>

</html>