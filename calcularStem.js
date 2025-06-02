function calcularBaterias() {
    // Datos del problema
    var capacidadTotal = 775.06; // en Ah
    var capacidadPorBateria = 100; // en Ah

    // Cálculo del número de baterías
    var numeroDeBaterias = capacidadTotal / capacidadPorBateria;

    // Mostrar resultado en #resultadoBaterias
    var resultado = document.getElementById("resultadoBaterias");
    resultado.innerHTML = 'Se necesitan <strong>' +
                          Math.ceil(numeroDeBaterias) + ' baterías</strong> de 100 Ah.';
}
