<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Récupère les données du formulaire
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $pw = $_POST['pw'];
  
  // Connexion à la base de données MySQL
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "travel";
  
  // Crée une nouvelle connexion à la base de données
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Vérifie si la connexion a réussi
  if ($conn->connect_error) {
    die("Connexion à la base de données échouée: " . $conn->connect_error);
  }
  
  // Prépare la requête SQL pour insérer les données dans la table "utilisateurs"
  $sql = "INSERT INTO users (id,nom, prenom, email, tel, pass,isactiveaccount) VALUES (NULL,'$fname', '$lname', '$email', '$tel', '$pw',1)";
  
  // Exécute la requête SQL
  if ($conn->query($sql) === TRUE) {
    
    // SUBSCRIPTION SUCCESS => REDIRECT TO NEXT PAGE GOES HERE

    echo "Inscription réussie!";
  } else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
  }
  
  // Ferme la connexion à la base de données
  $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
 
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class ="main-parent">
        <div class="form-wrap">
        <form action="./inscription.php" method="post" onsubmit="return validateForm()">

            <h1><span>Bienvenue</span></h1>
            <div class="single-input">
                <input required type="text" id="fname" name="fname"
                 placeholder="votre nom" >
            </div>

            <div class="single-input">
                <input required type="text"  id="lname" name="lname"
                placeholder="votre prenom">
            </div>

            <div class="single-input">
                <input  required type="email" id="email"  name="email" 
                placeholder="votre email" >
            </div>
       
            <div class="single-input">
                <input required type="tel" id="tel" name="tel" maxlength="8" min="11111111" max="99999999"
                 placeholder="votre numéro" >
            </div>

            <div class="single-input">
                <input required type="password" id="pw" name="pw"
                 placeholder="votre mot de passe" >
            </div>

            <div class="single-input">
                <input type="password" id="cpw" name="cpw"
                 placeholder="confirmer votre mot de passe" >
            </div>
            <div  class="Submit-button">
                <button class="button">S'inscrire</button>

            </div>
       <div class="account-have">
        <a href="forget.php">J'oublier le mot de passe</a>
        <a href="connected.php">j'ai dèja un compte  </a>
    </div>
</form>
</div>
</div>
<script src="./Admin/js/script2.js"></script>

</body>


</html>