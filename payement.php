<!DOCTYPE html>
<html>
<head>
  <title>Page de paiement</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- swiper css link  -->
     <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style1.css">
</head>
<body>

  <div class ="main-parent">
    <div class="form-wrap">
    <form action="payement.php">
        <h1><span>Payement</span></h1>

        <div class="single-input">
            <input required type="text" id="fname"
             placeholder="Nom du titulaire de la carte " >
        </div>

      

        <div class="single-input">
            <input  required type="email" id="email" 
            placeholder="votre email" >
        </div>
   
        <div class="single-input">
            <input required type="tel" id="tel"
             placeholder="votre numéro de carte " >
        </div>

        <div class="single-input">
            <input required type="text" id="cvv"
             placeholder="CVV" >
        </div>
        <div class="single-input">
            <input required type="date" id="date"
             placeholder="CVV" >
        </div>
        <div  class="Submit-button">
            <button class="button">Payer</button>

        </div>
        <div class="payment-icons">
            <img src="images/Mastercard.png" alt="Mastercard">
            <img src="images/visa.png" alt="Visa">
            <img src="images/paypal.png" alt="Paypal">
            <img src="images/D17.png" alt="D17">
          </div>
           
</form>
</div>

</div>


</body>
</html>