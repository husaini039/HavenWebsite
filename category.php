<?php
require 'config.php';
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

   <script>
      $(document).ready(function() {
         $(".agif").hide();
         $("#ref").hide();
         $(".windowx").hide();
         $(".regWindow").hide();
         // $(".testHide").hide();
         $(".faq").hide();

         $("#close").click(function() {
            $("#container").hide(500);
            $("#ref").show(500);
            $(".agif").show(500);
         });

         $("#ref").click(function() {
            $("#container").show(1000);
            $("#ref").hide();
            $(".agif").hide();
         });

      });
   </script>
   <!-- try test hide element -->
   <script>
      $(document).ready(function() {
         $("#change").click(function() {
            $(".testHide").toggle();
         })
      })
   </script>
</head>

<body>
   <div class="container" id="container">
      <div class="incontainer" style="height: 900px;">
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
                    <li><a href="nikeWoman.php" id="puma">Women</a></li>
                     <li><a href="faq.php" id="btnFaq">FAQ</a></li>
                   
                     <li><a href="team.html">Teams</a></li>
                  </ul>
               </nav>

               <div class="logo1">
                  
                  <div class="logo2">
                     <a href="profile.php" class="profile">
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

          




            <div class="boxProd">

               <div class="window">
                  <div class="title-bar" style="height: 20px;text-align: center;">
                     <div class="title-bar-text"> NIKE A1 STYLE</div>
                  </div>
                  <div class="window-body">
                     <div class="prodImg">
                        <img src="img/shoe8.jpg" alt="">
                     </div>
                     <hr>
                     <h6 class="view"><a href="nikeMan.php">View Man Category</a></h6>
                     <hr>
                  </div>
               </div>

               <div class="window">
                  <div class="title-bar">
                     <div class="title-bar-text">NIKE </div>
                  </div>
                  <div class="window-body">
                     <div class="prodImg">
                        <img src="img/shoe7.jpg" alt="">
                     </div>
                     <hr>
                     <h6 class="view"><a href="nikeWoman.php">View Woman Category</a></h6>
                     <hr>
                  </div>
               </div>

               

            </div>

            <div class="text">
               <div class="scrolling">
                  <p class="title1">WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE
                     KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE
                     （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT
                     HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME
                     TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;)
                     MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE
                     KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE
                     （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT
                     HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）WELCOME TO OUR WEBSITE KASUT HEAVEN (￣ ‘i ￣;) MUCH LOVE （＞人＜；）</p>
               </div>
            </div>

            <footer>
            <div class="foot">
               <div class="tabFoot">
                  <table class="foot1">
                     <tr>
                        <td>2022 Kasut Heaven All Rights Reserved</td>
                        <td>Crafted for CS264</td>
                     </tr>
                  </table>
               </div>
            </div>
            </footer>

           
         </div>
      </div>

   </div>



   <div class="refresh">
      <!-- <img src="img/loading.gif" class="agif"> -->
      <button id="ref">CLICK TO GO BACK HOME</button>
   </div>

</body>

</html>