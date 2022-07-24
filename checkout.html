<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php
include 'config.php';
session_start();
$_SESSION['id'] = $id;


if (isset($_POST['cc'])) {

   $cardName = $_POST['ccOwner'];
   $cardCVV = $_POST['ccCVV'];
   $cardNumber = $_POST['ccNumber'];
   $ccMonths = $_POST['ccMonths'];
   $ccYears = $_POST['ccYears'];



   $double = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM  card"));

   if (isset($double)) {
      $query = "INSERT INTO card(cardName,cardCVV,creditNumber,creditMonth,creditYear) VALUES('$cardName', '$cardCVV', '$cardNumber', '$ccMonths','$ccYears')";
      $run = mysqli_query($conn, $query);
      $message[] = 'PAID!';
      header("location:receipt.php");
   }
};


if (isset($_POST['bank'])) {

   $bankName = $_POST['owner'];
   $bankPass = $_POST['pass'];
   $bankNum = $_POST['num'];


   $double = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM  bank"));

   if (isset($double)) {
      $message[] = 'Error!';
   } else {
      $query = "INSERT INTO card(num,owner,pass) VALUES('$bankName', '$bankPass', '$bankNum')";
      $run = mysqli_query($conn, $query);
      $message[] = 'PAID!';
      header("location:receipt.php");
   }
};
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

<script>
   $(document).ready(function() {
      $("#containerxx").hide();
      $("#containerob").hide();

      $("#cc").click(function() {
         $("#containerxx").show();
         $("#containerob").hide();
      });

      $("#ob").click(function() {
         $("#containerxx").hide();
         $("#containerob").show();
      });

   });
</script>>

<body>
   <div class="container" id="container">
      <div class="incontainer" style="height: 1500px;">
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
         <div class="text">
            <div class="scrolling">
               <p class="title1">ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! ADD ,SHOP ,BUY WE GUARANTEED OF YOUR SATISFACTION. LOOKS SLICK NOW!! </p>
            </div>
         </div>

         <div class="shopping-cart">


            <table>
               <thead>
                  <th>image</th>
                  <th>name</th>
                  <th>price</th>
                  <th>size</th>
                  <th>quantity</th>
                  <th>total price</th>
               </thead>
               <tbody>
                  <?php
                  $grand_total = 0;

                  $cart_query = mysqli_query($conn, "SELECT * FROM `carts` ") or die('query failed');
                  if (mysqli_num_rows($cart_query) > 0) {
                     while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                  ?>
                        <tr>
                           <td><img src="img/product img/allPic/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                           <td><?php echo $fetch_cart['name'] ?></td>
                           <td>RM<?php echo $fetch_cart['price'] ?></td>
                           <td><?php echo $fetch_cart['size'] ?></td>
                           <td><?php echo $fetch_cart['quantity'] ?></td>

                           <td>RM<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>


                        </tr>
                  <?php
                        $grand_total += $sub_total;
                     };
                  };


                  ?>
                  <tr>
                     <td colspan="5">grand total:</td>
                     <td>RM<?php echo $grand_total; ?>/-</td>
                  </tr>

               </tbody>
            </table>

            <div class="con_info">
               <h4>Payment Method</h4>
               <form action="" method="POST">
                  <input type="radio" id="cc" name="pay" value="creditCard">
                  <label for="cc">Credit Card</label><br>
                  <input type="radio" id="ob" name="pay" value="onlineBanking">
                  <label for="ob">Online Banking</label><br>
               </form>
            </div>


            <div class="containerxx" id="containerxx">
               <div class="window" style="width: 800px">
                  <div class="title-bar">
                     <div class="title-bar-text">Credit card payment</div>
                     <div class="title-bar-controls">
                        <button aria-label="Minimize"></button>
                        <button aria-label="Maximize"></button>
                        <button aria-label="Close"></button>
                     </div>
                  </div>
                  <div class="window-body">

                     <form action="" method="POST">
                        <div class="first-row">
                           <div class="owner">
                              <h3>Owner</h3>
                              <div class="input-field">
                                 <input type="text" name="ccOwner" required>
                              </div>
                           </div>
                           <div class="cvv">
                              <h3>CVV</h3>
                              <div class="input-field">
                                 <input type="password" name="ccCVV" required>
                              </div>
                           </div>
                        </div>
                        <div class="second-row">
                           <div class="card-number">
                              <h3>Card Number</h3>
                              <div class="input-field">
                                 <input type="text" name="ccNumber" required>
                              </div>
                           </div>
                        </div>
                        <div class="third-row">
                           <h3 style="text-align:left;margin-top:10px;">Card Date</h3>
                           <div class="selection">
                              <div class="date">
                                 <select name="ccMonths" id="months" required>
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Jul">Jul</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sep">Sep</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                 </select>
                                 <select name="ccYears" id="years">
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                 </select>
                              </div>


                              <div class="cards">
                                 <img src="img/mc.png" alt="">
                                 <img src="img/vi.png" alt="">
                                 <img src="img/pp.png" alt="">
                              </div>
                           </div>
                        </div>
                        <input type="submit" value="CONFIRM" name="cc" class="btn" height="100">
                     </form>
                  </div>
               </div>
            </div>

            <div class="containerob" id="containerob">
               <div class="window" style="width: 800px">
                  <div class="title-bar">
                     <div class="title-bar-text">A Window With Stuff In It</div>
                     <div class="title-bar-controls">
                        <button aria-label="Minimize"></button>
                        <button aria-label="Maximize"></button>
                        <button aria-label="Close"></button>
                     </div>
                  </div>
                  <div class="window-body">
                     <h1>Online Banking</h1>
                     <form action="" method="POST">
                        <div class="first-row">
                           <div class="owner">
                              <h3>Bank Owner</h3>
                              <div class="input-field">
                                 <input type="text" name="owner">
                              </div>
                           </div>
                           <div class="cvv">
                              <h3>Password</h3>
                              <div class="input-field">
                                 <input type="password" name="pass">
                              </div>
                           </div>
                        </div>
                        <div class="second-row">
                           <div class="card-number">
                              <h3>Bank Number</h3>
                              <div class="input-field">
                                 <input type="text" name="num">
                              </div>
                           </div>
                        </div>


                        <input type="submit" value="CONFIRM" name="bank" class="btn">
                     </form>
                  </div>
               </div>




            </div>

         </div>
      </div>
      <style>

      </style>


   </div>



   </div>
   </div>
   </div>
   <style>
      .containerxx {
         position: relative;
         left: 19%;
         bottom: 100px;
         width: 750px;
         height: 600px;

         display: flex;
         flex-direction: column;
         padding: 40px;
         justify-content: space-around;
      }

      .containerxx h3 {
         font-size: 20px
      }

      .first-row {
         display: flex;
      }

      .owner {
         width: 100%;
         margin-right: 40px;
      }

      .input-field {
         border: 1px solid #999;
      }

      .input-field input {
         width: 100%;
         border: none;
         outline: none;
         padding: 10px;
      }

      .selection {
         display: flex;
         justify-content: space-between;
         align-items: center;
      }

      .selection select {
         padding: 10px 20px;
      }

      .containerxx a {
         background-color: blueviolet;
         color: white;
         text-align: center;
         text-transform: uppercase;
         text-decoration: none;
         padding: 10px;
         font-size: 18px;
         transition: 0.5s;
      }

      a:hover {
         background-color: dodgerblue;
      }

      .cards img {
         width: 100px;
      }

      .containerob {
         position: relative;
         left: 20%;
         bottom: 400px;
         top: 50px;
         width: 750px;
         height: 500px;
         display: flex;
         flex-direction: column;
         padding: 40px;
         justify-content: space-around;
      }

      .containerob h3 {
         font-size: 20px
      }

      .containerob a {
         background-color: blueviolet;
         color: white;
         text-align: center;
         text-transform: uppercase;
         text-decoration: none;
         padding: 10px;
         font-size: 18px;
         transition: 0.5s;
      }

      .date select {
         width: 110px;
         height: 40px;
      }

      .btn {
         margin: 24px;
         width: 70%;
         height: 35px;
         font-size: 16px;
         background-image: linear-gradient(to right,#3f63c2, #7746c3);
         color: white;

      }

      .con_info {
         width: 400px;
         border-radius: 5px;
         background-color: #3f63c2;
         text-align: center;
         position:relative;
         right: 40px;
         
      }

      
   </style>
</body>

</html>