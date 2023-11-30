function validateForm() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var tel = document.getElementById("tel").value;
  var pw = document.getElementById("pw").value;
  var cpw = document.getElementById("cpw").value;

  // Vérifier si tous les champs sont remplis
  if (fname == "" || lname == "" || email == "" || tel == "" || pw == "" || cpw == "") {
    alert("Veuillez remplir tous les champs");
    return false;
  }

  // Vérifier si l'email contient @ et .
  if (email.indexOf("@") == -1 || email.indexOf(".") == -1) {
    alert("Veuillez entrer une adresse e-mail valide");
    return false;
  }

  // Vérifier si le mot de passe est identique au mot de passe confirmé
  if (pw != cpw) {
    alert("Les mots de passe ne correspondent pas");
    return false;
  }

  // Vérifier si le numéro de téléphone contient 8 chiffres
  if (tel.length != 8 || isNaN(tel)) {
    alert("Veuillez entrer un numéro de téléphone valide");
    return false;
  }

  return true;
}
