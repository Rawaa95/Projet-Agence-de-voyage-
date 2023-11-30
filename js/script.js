let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
   inputNumber.oninput = () =>{
      if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
   };
});

var swiper = new Swiper(".home-slider", {
     loop:true,
     navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

const videos = document.querySelectorAll('video');

videos.forEach(video => {
  video.addEventListener('mouseover', () => {
    video.play();
  });
  
  video.addEventListener('mouseout', () => {
    video.pause();
  });
});



const form = document.querySelector('.book-form');
const nameInput = form.querySelector('input[name="name"]');
const emailInput = form.querySelector('input[name="email"]');
const phoneInput = form.querySelector('input[name="phone"]');
const addressInput = form.querySelector('input[name="address"]');
const locationInput = form.querySelector('input[name="location"]');
const guestsInput = form.querySelector('input[name="guests"]');
const arrivalsInput = form.querySelector('input[name="arrivals"]');
const leavingInput = form.querySelector('input[name="leaving"]');

form.addEventListener('submit', (event) => {
  if (nameInput.value === '' ||
      emailInput.value === '' ||
      phoneInput.value === '' ||
      addressInput.value === '' ||
      locationInput.value === '' ||
      guestsInput.value === '' ||
      arrivalsInput.value === '' ||
      leavingInput.value === '') {
    event.preventDefault();
    alert('Veuillez remplir tous les champs du formulaire.');
  }
});



/*tester le formulaire de reservation */
   function validateForm() {
      var name = document.forms["book-form"]["name"].value;
      var email = document.forms["book-form"]["email"].value;
      var location = document.forms["book-form"]["location"].value;
      if (name == "" || !/^[a-zA-Z\s]*$/.test(name)) {
         alert("Veuillez entrer un nom valide.");
         return false;
      }
      if (email == "" || !/^\S+@\S+\.\S+$/.test(email)) {
         alert("Veuillez entrer une adresse e-mail valide.");
         return false;
      }
      if (location == "") {
         alert("Veuillez choisir une destination.");
         return false;
      }
      return true;
   }
//tester date de retour et date d'arriver:

   // Récupérer les valeurs des champs de date
let dateArrivee = new Date(document.getElementsByName('arriver')[0].value);
let dateRetour = new Date(document.getElementsByName('Retour')[0].value);

// Créer des objets Date pour les dates de début et de fin
let dateDebut = new Date('2023-04-27');
let dateFin = new Date('2025-01-30');

// Comparer les dates saisies avec les dates de début et de fin
if (dateArrivee >= dateDebut && dateRetour <= dateFin) {
  // Les dates sont comprises entre le 27 avril 2023 et le 30 janvier 2025
 alert('Les dates sont valides.');
} else {
  // Les dates sont en dehors de la plage autorisée
 alert('Les dates sont invalides.');
}
