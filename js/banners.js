const image = document.getElementById('banner-image');
const prevButton = document.getElementById('prev-button');
const nextButton = document.getElementById('next-button');

const images = ['img/Banner/Banner-1.png', 'img/Banner/Banner-2.png', 'img/Banner/Banner-3.png', 'img/Banner/Banner-4.png']; // Rutas a tus imágenes

let currentIndex = 0;

function loadImage(index) {
    image.src = images[index];
    image.alt = `Imagen ${index + 1}`;
}

loadImage(currentIndex);

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    loadImage(currentIndex);
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    loadImage(currentIndex);
});