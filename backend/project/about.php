<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about_page.jpeg" alt="">
      </div>

      <div class="content">
         <p>Welcome to our Gamified Platform on Children's Rights, dedicated to increasing legal literacy and awareness among children in India. Our mission is to empower the youth by providing an engaging and interactive educational experience that helps them understand their rights and responsibilities.

We believe that knowledge is power, and through our platform, children can learn about their legal rights in a fun, accessible way. Our games and activities are designed to make complex legal concepts easy to understand and retain. By fostering a sense of curiosity and responsibility, we aim to create a generation of well-informed individuals who can advocate for themselves and others.

Join us in our journey to educate, empower, and inspire the children of India to become knowledgeable and proactive citizens.</p>
         <a href="courses.php" class="inline-btn">our Videos</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>1K+</h3>
            <span>Online Resources</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>Many</h3>
            <span>Brilliant Children's</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>Numerous</h3>
            <span>Expert Tutors</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Knowledge</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">parent's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"Incredibly engaging platform! My kids love learning about their rights while having fun."</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Parent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Fantastic resource for children’s legal education—interactive and easy to understand!"</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Parent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The games are so fun! My child is now more aware of their rights."</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Parent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Brilliant way to teach kids about their legal rights—informative and enjoyable!"</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Parent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"A must-visit for every child! Makes learning about rights exciting and memorable."</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Parent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Outstanding platform! Combines education and fun seamlessly for children’s legal literacy."</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Parent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>