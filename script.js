console.log("Script chargé !");
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner les éléments du formulaire
    const form = document.getElementById('signup-form');
    const messageDiv = document.getElementById('message');
    const emailInput = document.getElementById('email');

    // Vérifier si les éléments HTML existent
    if (!form || !messageDiv || !emailInput) {
        console.error("Un ou plusieurs éléments (form, message, email) sont introuvables dans le DOM.");
        return;
    }

    //  soumission au formulaire
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Empêche le rechargement de la page

        // Récupérer la valeur de l'email et la nettoyer
        const emailValue = emailInput.value.trim();

        // Vérifier si l'email est vide
        if (!emailValue) {
            messageDiv.textContent = "Veuillez remplir le champ email.";
            messageDiv.style.color = 'red';
            return;
        }

        // Vérifier si l'email est valide avec une expression régulière
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailRegex.test(emailValue)) {
            // Email valide
            messageDiv.textContent = `Merci pour votre inscription ! Vous recevrez nos actualités à l'adresse ${emailValue}.`;
            messageDiv.style.color = 'green';

            // Réinitialiser le champ email
            emailInput.value = '';
        } else {
            // Email invalide
            messageDiv.textContent = "Veuillez entrer une adresse email valide.";
            messageDiv.style.color = 'noir';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const reviewsWrapper = document.querySelector('.reviews-wrapper');
    const buttonLeft = document.querySelector('.button.left');
    const buttonRight = document.querySelector('.button.right');
  
    if (reviewsWrapper && buttonLeft && buttonRight) {
      buttonLeft.addEventListener('click', function () {
        reviewsWrapper.scrollBy({ left: -300, behavior: 'smooth' }); // Ajuste -300 selon la taille des avis
      });
  
      buttonRight.addEventListener('click', function () {
        reviewsWrapper.scrollBy({ left: 300, behavior: 'smooth' }); // Ajuste 300 selon la taille des avis
      });
    } else {
      console.error('Éléments nécessaires non trouvés dans le DOM.');
    }
  });
  
  
  










