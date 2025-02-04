<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/jd1about.webp" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
        <p>Choose KickSavvy for a shopping experience that focuses on style, comfort, and customer satisfaction. Our curated selection features the hottest new releases and hard-to-find exclusives, ensuring you always stay ahead of the trends. With a seamless, easy-to-navigate store, fast delivery, and exceptional support, we make finding your perfect pair effortless. KickSavvy is the place for those who demand the latest in sneaker fashion while enjoying top-notch quality and service every time you shop with us.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I’ve never found a store that combines exclusive releases with such great customer service. KickSavvy always keeps me in the loop with the latest drops!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lina </h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"The variety is incredible! Whether you’re looking for something classic or trendy, they’ve got it. I’ve gotten multiple pairs here and loved every one of them."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Roshan</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"The best sneaker shopping experience I’ve had. The website is easy to navigate, and they always have the newest styles. Highly recommend!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Astha</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>