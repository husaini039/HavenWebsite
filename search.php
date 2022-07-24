<?php
require 'config.php';
include 'logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php 
if(isset($_POST['search'])){
   $searchKey = $_POST['search'];
   $sql = "SLECT * FROM name";
}
?>
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
<style>
   input{
      width: 40%;
      height: 5%;
      border-radius: 05px;
      padding: 8px 15px 8px 15px;
      margin: 10px 0px 15px;
      box-shadow: 1px 1px 2px 1px grey;
   }
   .move{
      position: relative;
      text-align: center;
      top: 100px;
   }
</style>
   
</head>

<body>
   <div class="container" id="container">
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
<div class="move">
         <h4>Search Data from Database into textbox</h4>
        <form action="" method="POST">
         <input type="text" name="id" placeholder="Enter ID to search"/> <br/>
         <input type="submit" name="search" value="Search Data">
        </form>
         
<?php
if(isset($_POST['search'])){
   $id = $_POST['id'];
   $query = "SELECT * FROM product where id = '$id'";
   $query_run = mysqli_query($conn,$query);

   while($row = mysqli_fetch_array($query_run)){
      ?>
   <form action="" method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/> 
      <img src="img/product img/allPic/<?php echo $row['image'] ?>" alt="">
      <input type="text" name="name" value="<?php echo $row['name'] ?>"/>
      <input type="text" name="pic" value="<?php echo $row['pic'] ?>"/>
      <input type="text" name="price" value="<?php echo $row['price'] ?>"/>
      <input type="text" name="gender" value="<?php echo $row['gender'] ?>"/>
      <input type="text" name="category" value="<?php echo $row['category'] ?>"/>
   </form>
      <?php
   }
}
?>
</div>

      </div>
   </div>
</body>

</html>