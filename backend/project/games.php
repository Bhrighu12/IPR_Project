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
   <title>Games</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>


<section class="quick-select">

   <h1 class="heading">Play to Learn</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){

      ?>
      <div class="box">
         <h1 class="title">Games</h1>
         <div class="flex">
            <a href="https://www.educandy.com/site/resource_embedded.php?activity-code=120e21" target="_blank"><img src="images/png-transparent-thumbnail-making-miscellaneous-game-child.png"></a>
            <a href="https://www.educandy.com/site/resource_embedded.php?activity-code=120e21" target="_blank"><img src="images/png-transparent-ball-game-child-ball-game-food-text-thumbnail.png"></a>
            <a href="https://www.educandy.com/site/resource_embedded.php?activity-code=120e21" target="_blank"><img src="images/cartoon-school-kids-school-child-care-game-education-asilo-nido-preschool-video-games-png-clipart-thumbnail.jpg"></a>
            <a href="https://www.educandy.com/site/resource_embedded.php?activity-code=120e21" target="_blank"><img src="images/images.jpeg"></a>
            <a href="https://www.educandy.com/site/resource_embedded.php?activity-code=120e21" target="_blank"><img src="images/GK-Questions-And-Answers-For-Kids-1.jpg.webp"></a>
            <a href="https://www.educandy.com/site/resource_embedded.php?activity-code=120e21" target="_blank"><img src="images/trivia-questions-for-kids.jpg"></a>
            
         </div>
      </div>
      

   </div>

      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">Login or Register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

      
</section>






<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>