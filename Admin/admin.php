<?php 

if(isset($_POST['connecter'])){

    if(!empty($_POST['admin']) && !empty($_POST['psd'])){

    }
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="admin.css">

</head>
<body>

<div class="heading" style="background:url(images/img2.jpg)no-repeat">

<section class="espace-admin">

     <form method="post" action="connect.php">
     <h1>Espace Administrateur</h1>
     <div class="img-admin">
        <img src="admina.png" alt="admina">
    </div>
      <br>
      <input type="text" id="username" name="admin">
      <input type="password" id="password" name="psd">
      <br>
      <input type="submit" value="Se connecter" >
    </form>

</section>
  
</body>
</html>