<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Reservation</title>

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

   <a href="accueil.php" class="logo">travel Agency.</a>

   <nav class="navbar">
   <a href="accueil.php">Accueil</a>
      <a href="apropos.php">A propos</a>
      <a href="destination.php">Destination</a>
      <a href="reservation.php">Reservation</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Reserver</h1>
</div>

<!-- reservation section starts  -->

<section class="booking">

   <h1 class="heading-title">Reserver vous voyage !</h1>

    <form class="book-form" action="payement.php" method="post" onsubmit="return validateForm()">

      <div class="flex">
         <div class="inputBox">
            <span> Nom & prénom :</span>
            <input type="text" placeholder="votre nom & prénom" maxlength="30" name="name" required >  <span class="asterisk">*</span>
            
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" maxlength="50" placeholder="email" name="email" required><span class="asterisk">*</span>
         </div>
         <div class="inputBox">
            <span>Tel :</span>
            <input type="number" maxlength="8" min="0" max="99999999" placeholder="Numéro de tel" name="phone" required><span class="asterisk">*</span>
         </div>
         <div class="inputBox">
            <span>addresse :</span>
            <input type="text" maxlength="50" placeholder="votre adresse" name="address" required><span class="asterisk">*</span>
         </div>
       
         <div class="inputBox">
   <span>Destination :</span>
   <select name="location" required>
      <option value="destination1">Paris</option>
      <option value="destination2">Egypte</option>
      <option value="destination3">Turquie</option>
   </select>
</div>
         <div class="inputBox">
            <span>Nombre de personnes :</span>
            <input type="number" min="1" max="99" maxlength="2" placeholder="nombres de personnes " name="guests" required><span class="asterisk">*</span>
         </div>
         <div class="inputBox">
            <span>Votre aller :</span>
            <input type="date" name="arriver" maxlength="10" required><span class="asterisk">*</span>
         </div>
         <div class="inputBox">
            <span>Votre retour :</span>
            <input type="date" name="Retour" maxlength="10" required><span class="asterisk">*</span>
         </div>
      </div>
  
      <input type="submit" value="reserver" class="btn" name="send">

      
   </form>

</section>

<!-- reservation section ends -->




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
         <a href="#"> <i class="fas fa-map"></i> Kairouan, Tunisie - 3100 </a>
      </div>

      <div class="box">
         <h3>Suivez nous</h3>
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i> Tiktok</a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> Youtube</a>
      </div>

   </div>

   <div class="credit"> created by <span>RF. Rawaa Farid</span> | @2023 Travel.Agency tous droits réservés! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>