// Obtén una referencia al botón de menú y los botones de navegación
var mobileMenuButton = document.getElementById("mobile-menu-button");
var navButtons = document.getElementById("buttons-nav");

// Variable para rastrear el estado del menú
let isMenuOpen = false;

// Agrega un controlador de eventos de clic al botón de menú
mobileMenuButton.addEventListener("click", function () {
    // Cambia el estado del menú
    isMenuOpen = !isMenuOpen;

    // Aplica estilos según el estado del menú
    if (isMenuOpen) {
        navButtons.style.display = "block"; // Mostrar los botones de navegación
    } else {
        navButtons.style.display = "none"; // Ocultar los botones de navegación
    }
});

// Agrega un controlador de eventos de cambio de tamaño de la ventana
window.addEventListener("resize", function () {
    // Si la ventana vuelve al tamaño establecido (por ejemplo, más de 768px), asegúrate de que los botones de navegación estén visibles
    if (window.innerWidth > 768) {
        navButtons.style.display = "block"; // Mostrar los botones de navegación
        isMenuOpen = false; // Restablecer el estado del menú
    } else {
        // Si la ventana está por debajo del tamaño establecido, aplica el estado del menú según sea necesario
        if (isMenuOpen) {
            navButtons.style.display = "block"; // Mostrar los botones de navegación si el menú estaba abierto
        } else {
            navButtons.style.display = "none"; // Ocultar los botones de navegación si el menú estaba cerrado
        }
    }
});

// Asegúrate de que los botones de navegación estén visibles inicialmente en pantallas más grandes
if (window.innerWidth > 768) {
    navButtons.style.display = "block"; // Mostrar los botones de navegación
}