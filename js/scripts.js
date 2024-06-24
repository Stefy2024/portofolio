document.addEventListener('DOMContentLoaded', function () {
// Sélectionnez l'élément à animer
const image = document.querySelector('.zone_hero h1');

// Créez un nouvel observateur d'intersection
const observerTitre = new IntersectionObserver((entries) => {
    // Pour chaque entrée...
    entries.forEach((entry) => {
        // Si l'élément est visible à l'écran...
        if (entry.isIntersecting) {
            // Ajoutez la classe CSS qui déclenche l'animation
            image.style.animationPlayState = 'running';
        } else {
            // Sinon, retirez la classe CSS
            image.style.animationPlayState = 'paused';
        }
    });
});

// Commencez à observer l'élément
observerTitre.observe(image);

    // Sélectionnez tous les éléments à animer
    const images = document.querySelectorAll('.image-container img');

    // Créez un nouvel observateur d'intersection
    const observerImg = new IntersectionObserver((entries) => {
        // Pour chaque entrée...
        entries.forEach((entry) => {
            // Si l'élément est visible à l'écran...
            if (entry.isIntersecting) {
                // Ajoutez la classe CSS qui déclenche l'animation
                entry.target.style.animationPlayState = 'running';
            } else {
                // Sinon, retirez la classe CSS
                entry.target.style.animationPlayState = 'paused';
            }
        });
    });

    // Commencez à observer chaque élément
    images.forEach((image) => {
        observerImg.observe(image);
    });
});

