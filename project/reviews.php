   

   
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>


<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
         <div class="swiper-slide box">
            <img src="images/pic-1.png" alt="">
            <h3>Krushna Tupe</h3>
            <p>The hotel itself is a very successful hotel. I will explain the pleasures of the most worthy of flattery.</p>
         </div>
         <div class="swiper-slide box">
            <img src="images/pic-2.png" alt="">
            <h3>Aniket Borse</h3>
            <p>The hotel itself is a very successful hotel. I will explain the pleasures of the most worthy of flattery.</p>
         </div>
         <div class="swiper-slide box">
            <img src="images/pic-3.png" alt="">
            <h3>Shivam Tupe</h3>
            <p>The hotel itself is a very successful hotel. I will explain the pleasures of the most worthy of flattery.</p>
         </div>
        
      </div>

      <div class="swiper-pagination"></div>
   </div>

</section>
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <a href="tel:9067251231"><i class="fas fa-phone"></i> +91 9067251231</a>
         <a href="tel:7249856342"><i class="fas fa-phone"></i> +91 7249856342</a>
         <a href="tel:9689774419"><i class="fas fa-phone"></i> +91 9689774419</a>
         <a href="mailto: tupekrushna224@gmail.com"><i class="fas fa-envelope"></i> tupekrushna224@gmail.com</a>
         <a href="mailto: borseaniket62@gmail.com"><i class="fas fa-envelope"></i> borseaniket62@gmail.com</a>
         <a href="mailto: shivamtupe991@gmail.com"><i class="fas fa-envelope"></i> shivamtupe991@gmail.com</a>
         <a href="https://www.google.com/maps/place/Welcomhotel+By+ITC+Hotels,+Rama+International,+Aurangabad-Premium+business+%26+leisure+hotel%7C+Near+Ajanta+Ellora+Caves/@19.8758946,75.3562662,17z/data=!3m1!4b1!4m9!3m8!1s0x3bdb98159f206975:0x38405bac1ce1bafa!5m2!4m1!1i2!8m2!3d19.8758946!4d75.3588411!16s%2Fg%2F1tfk2x1m?authuser=0&entry=ttu"><i class="fas fa-map-marker-alt"></i> chh.sambajinagar(Aurangabad), india - 431001</a>
      </div>

      <div class="box">
         <a href="index.php#home">Home</a>
         <a href="about.php">Facilities</a>
         <a href="bookings.php">My bookings</a>
         <a href="reservation.php">Bookings</a>
         <a href="gallery.php">Rallery</a>
         <a href="contact.php">message us</a>
         <a href="reviews.php">Reviews</a>
      </div>

      <div class="box">
         <a href="#">facebook <i class="fab fa-facebook-f"></i></a>
         <a href="#">twitter <i class="fab fa-twitter"></i></a>
         <a href="#">instagram <i class="fab fa-instagram"></i></a>
         <a href="#">linkedin <i class="fab fa-linkedin"></i></a>
         <a href="https://youtu.be/8s9tEgtqQmA?si=1E4FOtt0r-ud4oOD">youtube <i class="fab fa-youtube"></i></a>
      </div>

   </div>

   <div class="credit">&copy; Copyright @ 2024 by mr. web designer | all rights reseved!</div>

</section>

<!-- footer section ends -->

<!-- reviews section ends  -->




<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->


<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>