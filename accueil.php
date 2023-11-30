<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   
<!-- header section starts  -->

<section class="header">
<div class="logo">
   <a href="accueil.php">Travel Agency<span>.</span></a>
</div>
   <nav class="navbar">
      <a href="accueil.php">Accueil</a>
      <a href="apropos.php">A propos</a>
      <a href="destination.php">Destination</a>
      <a href="reservation.php">Reservation</a>
      <a href="inscription.php" class="register-btn">S'inscrire</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>profiter , découvrir, Voyager</span>
               <h3>Voyager autour de monde</h3>
               <a href="destination.php" class="btn">Afficher plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>profiter , découvrir, Voyager</span>
               <h3>discover the new places</h3>
               <a href="destination.php" class="btn">Afficher plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>profiter , découvrir, Voyager</span>
               <h3>make your tour worthwhile</h3>
               <a href="destination.php" class="btn">Afficher plus</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Nos services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="off road">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="camping">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>A propos de nous </h3>
      <p>Bienvenue chez Travel Agency! Nous sommes là pour vous aider à réaliser vos rêves de voyage 
         en proposant des destinations et des itinéraires adaptés à vos besoins et à vos envies. Notre équipe passionnée et expérimentée travaille avec des fournisseurs de confiance pour vous offrir les meilleurs services de transport, d'hébergement et d'activités. Contactez-nous dès maintenant pour planifier votre prochain voyage inoubliable !</p>
      <a href="apropos.php" class="btn">Afficher plus</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title">Nos destinations </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paris 3.500 Dt</h3>
            <p>Un séjour à Paris réussi conjugue activités et détente, 
               tout en prenant le temps de savourer un bon repas tout comme les célèbres expositions du Louvre. </p>
            <a href="reservation.php" class="btn">Reserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Istanbul,Turquie 1.999 DT </h3>
            <p>Visiter Istanbul?.découverte et guide de visite, A la découvrte d'Istanbul,le plus passionnante du monde.
            Istanbul est le centre culturel et financier de la Turquie ,la plus peuplée du pays.
            </p>
            <a href="reservation.php" class="btn">Reserver</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Normandie,France 3.200 DT</h3>
            <p>Inspirez, expirez..vivre une expérience rafraîchissante dans  Normandie aux formes généreuses. 
               Escalade, rando… que du bonheur ! Bienvenue en France Normande !</p>
            <a href="reservation.php" class="btn">Reserver</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="destination.php" class="btn">Afficher plus</a> </div>

</section>

<!-- home packages section ends -->
<Div class= "videos">
   <h3>Vidéos de Club</h3>
  
<div class="video-container">
   
    <video muted autoplay id="video1" src="video/vid1.mp4" controls></video>
    <video muted autoplay id="video2" src="video/vid2.mp4" controls></video>
    <video muted autoplay id="video3" src="video/vid3.mp4" controls></video>
    
  </div>
</div>


<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Offre 25% off</h3>
      <p>Travel Agency, votre Agence de Voyage en Tunisie en Ligne vous propose des Promotions sur vos Voyages et Séjours en Tunisie et dans le Monde avec les Meilleurs Prix et Services.</p>
      <a href="reservation.php" class="btn">Reserver</a>
   </div>
</section>

<!-- home offer section ends -->






<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Liens rapides</h3>
         <a href="accueil.php"> <i class="fas fa-angle-right"></i> Accueil</a>
         <a href="apropos.php"> <i class="fas fa-angle-right"></i> A propos</a>
         <a href="destination.php"> <i class="fas fa-angle-right"></i>Destination</a>
         <a href="reservation.php"> <i class="fas fa-angle-right"></i> Reservation</a>
      </div>
    

      <div class="box">
         <h3>Informations utiles</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Travel Agency vous répond</a>
         <a href="apropos.php"> <i class="fas fa-angle-right"></i> Qui somme nous?</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Condition de vente</a>
         <a href="#"> <i class="fas fa-angle-right"></i> FAQ</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +216 70 456 789</a>
         <a href="#"> <i class="fas fa-phone"></i> +216 22 233 334 </a>
         <a href="#"> <i class="fas fa-envelope"></i> agencytravel65@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Rue Okba , Kairouan, Tunisie - 3100 </a>
      </div>

      <div class="box">
         <h3>Suivez nous :</h3>
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i> Tiktok</a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> Youtube</a>
      </div>

   </div>
   <div class="credit"> created by <span>RF. Rawaa Farid</span> | @2023 Travel.Agency tous droits réservés! </div>
  
</section>

<!-- footer section ends -->




 <!-- Back to Top -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>