<?php
error_reporting(E_ERROR | E_PARSE);
include 'config.php';
session_start();
?>

<?php
if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `carts` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('faillled query');
   $message[] = 'quantity updated!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn,"DELETE FROM `carts`  WHERE id = '$remove_id'"  ) or die("faileddd on remove");
   $message[] = 'item removed!';

}

if(isset($_GET['delete_all'])){
   mysqli_query($conn,"DELETE FROM `carts`") or die("faileddd on remove");
   $message[] = 'All item removed!';

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
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

   <div class="container" id="container">
      <div class="incontainer" style="height: auto;">
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
            <h1 class="heading">Your shopping cart</h1>
            <hr>
            


            <table>
               <thead>
               <th>image</th>
               <th>name</th>
               <th>price</th>
               <th>size</th>
               <th>quantity</th>
               <th>total price</th>
               <th>action</th>
               </thead>
            <tbody>
               <?php
               $grand_total = 0;

               $cart_query = mysqli_query($conn, "SELECT * FROM `carts`") or die('query failed');
               if (mysqli_num_rows($cart_query) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
               ?>
               <tr>
                  <td><img src="img/product img/allPic/<?php echo $fetch_cart['image'];?>"   height="100"  alt=""></td>
                  <td><?php echo $fetch_cart['name']?></td>
                  <td>RM<?php echo $fetch_cart['price']?></td>
                  <td><?php echo $fetch_cart['size']?></td>
                  <td>
                     <form action="" method="POST">
                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id'];?>">
                        <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity'];?>">
                        <input type="submit" name="update_cart" value="update" class="option-btn">
                     </form>
                  </td>
                  <td>RM<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity'] ); ?>/-</td>
                     <td><a href="?remove=<?php echo $fetch_cart['id'];?>" class="delete-btn" onclick="return confirm('remove item from cart?')">Remove</a> </td>
                     
               </tr>
               <?php
               $grand_total += $sub_total;
                  };
               }else{
                  echo'<tr><td style="padding:20px;" colspan="7"> NO ITEM ADDED</td></tr>';
               }
               ?>
               <tr class="table-bottom">
                  <td colspan="5">grand total:</td>
                  <td>RM<?php echo $grand_total; ?>/-</td>
                  <td> <a href="?delete_all <?php  echo ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');" class="delete-btn">Delete all</a></td>
               </tr>

            </tbody>
         </table>

         <div class="cart-btn">
            <button> <a href="checkout.php" class="btn <?php  echo ($grand_total > 1)?'':'disabled'; ?>">Proceed to checkout!</a></button>
         </div>


         </div>
      </div>
   </div>
</body>

</html>