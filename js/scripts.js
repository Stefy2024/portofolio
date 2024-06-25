document.addEventListener('DOMContentLoaded', function () {
    //////////////////////////////////////////////////
    //Contact

// recupere la modal
const modal = document.getElementById('myModal');
// recupere l'élément "contact"
const contact = document.getElementById("menu-item-47");
// recupere l'élément span pour fermer (la croix)
const span = document.getElementsByClassName("close")[0];

// au click sur contact, on remplace display none par display block (ouvre le formulaire)
contact.onclick = function() {
    modal.style.display = "block";
}

// au click sur la croix, on ferme (display=none)
span.onclick = function() {
    modal.style.display = "none";
}
// au click hors du cadre du formulaire, on ferme (display=none)
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


 /************partie JS mobile*****************/

 const burger = document.querySelector('.burger_menu');
 const nav = document.querySelector('#navigation');
 const closeIcon = document.querySelector('.close_icon');
 // Lors du clic sur le menu burger, on affiche le menu et on cache le menu burger
 burger.addEventListener('click', function() {
     nav.classList.toggle('is-active');
     closeIcon.style.display = 'block'; // Affiche la croix
     burger.style.display = 'none'; // Cache le menu burger
 });
 // Lors du clic sur la croix, on cache le menu et on affiche le menu burger
 closeIcon.addEventListener('click', function() {
     nav.classList.remove('is-active');
     closeIcon.style.display = 'none'; // Cache la croix
     burger.style.display = 'block'; // Affiche le menu burger
 });

//////////////////////////////////////////////////
// Page Accueil- Sélectionne l'élément à animer
const image = document.querySelector('.zone_hero h1');

// Créer un nouvel observateur d'intersection
const observerTitre = new IntersectionObserver((entries) => {
    // Pour chaque entrée
    entries.forEach((entry) => {
        // Si l'élément est visible à l'écran
        if (entry.isIntersecting) {
            // déclenche l'animation
            image.style.animationPlayState = 'running';
        } else {
            // Sinon, met en pause
            image.style.animationPlayState = 'paused';
        }
    });
});

// Commence à observer l'élément
observerTitre.observe(image);

    // Sélectionne tous les éléments à animer
    const images = document.querySelectorAll('.image-container img');

    // Créer un nouvel observateur d'intersection
    const observerImg = new IntersectionObserver((entries) => {
        // Pour chaque entrée...
        entries.forEach((entry) => {
            // Si l'élément est visible à l'écran...
            if (entry.isIntersecting) {
                //  déclenche l'animation
                entry.target.style.animationPlayState = 'running';
            } else {
                // Sinon, met l'animation en pause
                entry.target.style.animationPlayState = 'paused';
            }
        });
    });

    // Commence à observer chaque élément
    images.forEach((image) => {
        observerImg.observe(image);
    });


});

