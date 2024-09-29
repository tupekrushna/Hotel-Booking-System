<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30, '/');
   header('location:index.php');
}


if(isset($_POST['send'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_message->execute([$name, $email, $number, $message]);

   if($verify_message->rowCount() > 0){
      $warning_msg[] = 'Message sent already!';
   }else{
      $insert_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$id, $name, $email, $number, $message]);
      $success_msg[] = 'Message send successfully!';
   }

}

?>
<!-- about section starts  -->

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


<!-- contact section starts  -->

<section class="contact" id="contact">

   <div class="row">

      <form action="" method="post">
         <h3>Send us message</h3>
         <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="Enter your email" class="box">
         <input type="number" name="number" required maxlength="10" min="0" max="9999999999" placeholder="Enter your number" class="box">
         <textarea name="message" class="box" required maxlength="1000" placeholder="Enter your message" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>

      <div class="faq">
         <h3 class="title">Frequently asked questions</h3>
         <div class="box active">
            <h3>How to cancel?</h3>
            <p>It is very important for the customer to pay attention to the adipiscing process. Does she not herself seek flexibility in reason? Untied!</p>
         </div>
         <div class="box">
            <h3>Is there any vacancy?</h3>
            <p>Not right now !! we will let you know ASAP if any !! please refer to emailId!!</p>
         </div>
         <div class="box">
            <h3>What are payment methods?</h3>
            <p>It is very important for the customer to pay attention to the adipiscing process. Does she not herself seek flexibility in reason? Untied!</p>
         </div>
         <div class="box">
            <h3>How to claim coupons codes?</h3>
            <p>It is very important for the customer to pay attention to the adipiscing process. Does she not herself seek flexibility in reason? Untied!</p>
         </div>
         <div class="box">
            <h3>What are the age requirements?</h3>
            <p>It is very important for the customer to pay attention to the adipiscing process. Does she not herself seek flexibility in reason? Untied!</p>
         </div>
      </div>

   </div>

</section>

<!-- contact section ends -->







<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->


<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>