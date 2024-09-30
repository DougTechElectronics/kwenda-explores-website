<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><h1>Kwenda Explorers</h1></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Classic Malawi Safari Package</h3>
            <p>Liwonde National Park, Nkhotakota wildlife reserve, Majete Game Reserve, Nyika National Park: enjoy game drives and boat safari to spot wild animals, special plants and diverse bird species.</p>
            <h2>mk 300,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Lake Malawi Beach Getaway</h3>
            <p>Cape Maclear, Monkey Bay, Salima, Nkata Bay, Nkhotakota, Likoma Island: Relax on pristine beaches and enjoy water activities such as snorkeling and kayaking.</p>
            <h2>mk 400,009</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Malawi Cultural Experience Tour</h3>
            <p>Cultural Heritage: Visit the local communities, enjoy traditional performances, Local foods and Drinks, experience local accomodation and be part of the communities.</p>
            <h2>mk 111,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Honeymoon in Malawi</h3>
            <p>Lake Malawi Luxury Retreat: Enjoy romantic dinners and private beach time.</p>
            <h2>mk 138,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Adventure and Nature Explorer</h3>
            <p>Travel not to escape life but to escape the ordinary while exploring world`s amazing nature. There is always time for every humn being to take the adventure of the life and interact with the mountains. explore Zomba Plateau, Mulanje mountain and other amazing landscape in Malawi and beyond. For the purpose of life is to live it, to taste experience to the utmost, to reach out eagerly and without fear for newer and richer experience. Explore with us. >
            <h2>mk 766,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Family Adventure Package</h3>
            <p>Liundwe National Park: Wildlife safari with educational components for kids.</p>
            <h2>mkw 127,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Volunteer and Travel Package</h3>
            <p>Cultural Exchange: Interact with Malawian communities.</p>
            <h2>mkw 18,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      
      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Camping</h3>
            <p>For out door activity lovers, Kwenda Explores has a variety of camping selections ranging from community camp sites to upscale camping. Shout out for tailor made camping arrangements</p>
           
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> info@kwendaexplores.com</a>
         <a href="#"> <i class="fas fa-map"></i> lilongwe, Malawi  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Digital line technology</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>