// Obtén una referencia al botón de menú y los botones de navegación
var mobileMenuButton = document.getElementById("mobile-menu-button");
var navButtons = document.getElementById("buttons-nav");

// Variable para rastrear el estado del menú
let isMenuOpen = false;

// Función para mostrar u ocultar los botones de navegación según el estado del menú
function toggleMenu() {
    isMenuOpen = !isMenuOpen;

    // Aplica estilos según el estado del menú
    if (isMenuOpen) {
        navButtons.style.display = "block"; // Mostrar los botones de navegación
    } else {
        navButtons.style.display = "none"; // Ocultar los botones de navegación
    }
}

// Agrega un controlador de eventos de clic al botón de menú
mobileMenuButton.addEventListener("click", toggleMenu);

// Agrega un controlador de eventos de cambio de tamaño de la ventana
window.addEventListener("resize", function () {
    if (window.innerWidth > 768) {
        // Si la ventana es más grande que 768px, muestra siempre los botones de navegación
        navButtons.style.display = "block";
        isMenuOpen = false; // Restablecer el estado del menú
    } else if (isMenuOpen) {
        // Si la ventana es menor que 768px y el menú está abierto, sigue mostrando los botones de navegación
        navButtons.style.display = "block";
    } else {
        // Si la ventana es menor que 768px y el menú está cerrado, oculta los botones de navegación
        navButtons.style.display = "none";
    }
});

// También, agrega un controlador de eventos para cada botón de navegación para cerrar el menú al hacer clic en un enlace
var navLinks = document.querySelectorAll("#buttons-nav a");
navLinks.forEach(function (link) {
    link.addEventListener("click", toggleMenu);
});
