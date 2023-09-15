document.getElementById("mostrarFormulario1").addEventListener("click", function () {
    document.getElementById("formulario").style.display = "block";
    document.getElementById("formulario2").style.display = "none";
});

document.getElementById("mostrarFormulario2").addEventListener("click", function () {
    document.getElementById("formulario").style.display = "none";
    document.getElementById("formulario2").style.display = "block";
});


// Función para mostrar u ocultar las opciones adicionales según la selección
document.getElementById('opciones').addEventListener('change', function() {
    var opcionSeleccionada = this.value;

    // Ocultar todas las opciones adicionales
    var opcionesAdicionales = document.querySelectorAll('.hidden');
    opcionesAdicionales.forEach(function(opcion) {
        opcion.style.display = 'none';
    });

    // Mostrar la opción adicional correspondiente
    if (opcionSeleccionada === 'Sena') {
        document.getElementById('opcion1Detalle').style.display = 'flex';
        document.getElementById('opcion2Detalle').style.display = 'flex';

        
    } else if (opcionSeleccionada === 'Externa') {
        document.getElementById('opcion3Detalle').style.display = 'flex';
    }
});