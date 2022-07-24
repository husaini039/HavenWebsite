<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (isset($_GET['logout'])) {
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];
   $product_size = $_POST['product_size'];

 

   $double = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM carts WHERE name = '$product_name'"));

   if(isset($double)){
      $message[] = 'product already added to cart!';
   }else{
      $query = "INSERT INTO carts(name,price,image,quantity,size) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$product_size')";
      $run = mysqli_query($conn, $query);
      $message[] = 'Product Added!';
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

<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
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
               <p class="title1">MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED. MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED. MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED. MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED. MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED. MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED. MAN SPORTWEARS, ESPECIALLY THE SHOES! COOL AND AWESOME TO BE EQUIPPED.
               </p>
            </div>
         </div>

         <div class="sticky">
            <div class="inSticky">
               <ul class="navLinks">
                  <li><a href="nikeMan.php" id="nike">NIKE</a></li>
                  <li><a href="pumaMan.php" id="puma">PUMA</a></li>
                  <li><a href="skechersMan.php" id="skecer">SKETCHERS</a></li>
                  <li><a href="adidasMan.php" id="adidas">ADIDAS</a></li>
               </ul>

            </div>
         </div>

         <div class="products">

            <h1 class="heading">MAN ADIDAS SHOES</h1>
            <hr>

            <div class="box-container">

               <?php
   
               $select_product = mysqli_query($conn, "SELECT * FROM `product` WHERE gender = 'man' AND category = 'adidas'") or die('query failed');
               if (mysqli_num_rows($select_product) > 0) {
                  while ($fetch_product = mysqli_fetch_assoc($select_product)) {
               ?>
                     <form method="post" class="box" action="">
                        <img src="/img/product img/Adidas/Man/<?php echo $fetch_product['pic']; ?>" alt="">
                        <div class="name"><?php echo $fetch_product['name']; ?></div>
                        <div class="price">RM<?php echo $fetch_product['price']; ?></div>
                        <input type="number" min="1" name="product_quantity" value="1">
                        <select name="product_size">
                        <option value="43">43</option>
                        <option value="45">45</option>
                        <option value="47">47</option>
                        <option value="50">50</option>
                     </select>
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['pic']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                     </form>
               <?php
                  };
               };
               ?>

            </div>

         </div>

      </div>
   </div>
</body>

</html>