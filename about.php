<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>About Us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Exceptional Quality and Freshness
At our online food delivery service, we prioritize quality and freshness above all else. Each meal is prepared with the finest ingredients, sourced from trusted suppliers who share our commitment to excellence. Our culinary team ensures that every dish is crafted to perfection, offering you an unparalleled dining experience in the comfort of your home.

Diverse and Customizable Menu
We understand that food preferences are as unique as our customers. That's why we offer a diverse menu that caters to a variety of tastes and dietary requirements. Whether you're craving a hearty meal, looking for vegan options, or needing gluten-free alternatives, our customizable menu has something for everyone. Enjoy the freedom to personalize your order to suit your specific needs and preferences.

Fast and Reliable Delivery
We know that when hunger strikes, you want your food delivered promptly and reliably. Our advanced logistics system and dedicated delivery team ensure that your order arrives hot, fresh, and on time. Track your delivery in real-time through our user-friendly app, and rest assured that your meal is just minutes away.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>select food</h3>
         <p>Pick your favorite meal at reasonable prices.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>30 minutes delivery</h3>
         <p>On time delivery at your doorstep!</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food!</h3>
         <p>Enjoy your warm and happy meal with your family and friends!</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"I appreciate the wide variety of options available. The app is easy to use, and I’ve never had an issue with my orders. The only improvement I’d suggest is offering more frequent discounts for regular customers."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>"I’m impressed by the sustainable practices this company follows. The eco-friendly packaging and efforts to reduce food waste make me feel good about ordering here. Plus, the food tastes amazing every single time."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>stella</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"The food is consistently delicious, and the delivery drivers are always courteous and professional. It's clear that this company cares about its customers and strives to provide the best service possible."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>nathan</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Super reliable and user-friendly! I love how easy it is to navigate the app and customize my orders. The delivery is always on time, and the food never disappoints. I’ve recommended this service to all my friends."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>emily</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"Overall, a great service with a wide range of menu options. I appreciate the commitment to safety and hygiene, especially during these times. My only suggestion would be to add even more international cuisine choices."

</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>sebastian</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"The freshness and quality of the ingredients are evident in every bite. It feels like a gourmet experience delivered to my door. The eco-friendly packaging is also a huge plus for me. Keep up the great work!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>claire</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>