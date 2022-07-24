<?php
require 'config.php';
include 'logged-in.php';
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
   <div class="incontainer" style="height: 900px;">

         <div class="title-bar">
            <div class="title-bar-text">Kasut Haven</div>
            <div class="title-bar-controls">
               <button aria-label="Maximize" id="change"></button>
               <button aria-label="Close" id="close"></button>
            </div>
         </div>

         <div class="window" style="width: 760px">
            <div class="title-bar">
               <div class="title-bar-text" style="font-size:13px;">Receipt.txt</div>
               <div class="title-bar-controls">
                  <button aria-label="Minimize"></button>
                  <button aria-label="Maximize"></button>
                  <button aria-label="Close"></button>
               </div>
            </div>

            <div class="window1" style="width: 750px">
               <div class="window-body">
                  <?php
                  $user_querey = mysqli_query($conn, "SELECT * FROM `userinformation` WHERE id = '$id'") or die('query failed');
                  if (mysqli_num_rows($user_querey) > 0) {
                     while ($fetch_user = mysqli_fetch_assoc($user_querey)) {
                  ?>
                        <hr>
                        <p>Name: <span><?php echo $fetch_user['name'] ?></span> &nbsp; Email: <span><?php echo $fetch_user['email'] ?></span> &nbsp; Phone: <span><?php echo $fetch_user['phoneNumber'] ?></span></p>
                        <hr>
                        <p>Address: <span><?php echo $fetch_user['address'] ?></span></p>
                        <hr>
                        <p>Postcode: <span><?php echo $fetch_user['postalCode'] ?></span> &nbsp; City: <span><?php echo $fetch_user['city'] ?></span> &nbsp; State: <span><?php echo $fetch_user['state'] ?></span></p>
                        <hr>

                  <?php };
                  }; ?>
               </div>
            </div>
            <div class="window-body">

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
                              <td>RM<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>

                           </tr>

                     <?php
                           $grand_total += $sub_total;
                        };
                     } else {
                        echo '<tr><td style="padding:20px;" colspan="7"> NO ITEM ADDED</td></tr>';
                     }
                     ?>
                     <tr class="table-bottom">
                        <td colspan="5">grand total:</td>
                        <td>RM<?php echo $grand_total; ?></td>

                     </tr>
                  </tbody>
               </table>
               <hr>
               <a href="index.php"><button class="btHome">Back to home</button></a>
               <hr>
            </div>
         </div>
      </div>
   </div>

   <style>
      .window {
         position: relative;
         top: 50px;
         left: 350px;
         font-size: 15px;
      }

      .window-body table tr td input[type="number"] {
         width: 70px;
         border: black;
         padding: 12px 14px;
         font-size: 15px;
         color: black;
      }

      table,
      thead,
      th {
         background-color: #f6f6f6;
         padding: 40px;
      }

      th {
         background-color: gray;
      }

      p {
         font-size: 20px;
         color: black;
         padding: 10px 0;
         background-image: linear-gradient(to right, #3f63c2, #7746c3);
         color: black;

      }

      p span {
         color: #e3e3e3;
      }

      .btHome {
         margin: 24px;
         width: 70%;
         height: 40px;
         font-size: 16px;
         background-image: linear-gradient(to right, #3f63c2, #7746c3);
         color: white;
      }
   </style>


</body>

</html>