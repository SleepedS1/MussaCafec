function showTable(tableId) {
    var table = document.getElementById(tableId);
    
    // Si la tabla ya está visible, la oculta; de lo contrario, la muestra.
    if (table.classList.contains('hidden')) {
        // Oculta todas las tablas
        var tables = document.querySelectorAll('section');
        for (var i = 0; i < tables.length; i++) {
            tables[i].classList.add('hidden');
        }
        
        // Muestra la tabla específica
        table.classList.remove('hidden');
    } else {
        // Oculta la tabla
        table.classList.add('hidden');
    }
}
