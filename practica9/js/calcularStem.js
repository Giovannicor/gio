function calcularCalor() {
  // Datos del problema
  const K = 950; // Coeficiente de radiación en W/m²
  const horasSol = 10; // horas de sol al día
  const area = 3 * 2; // área de la cristalera en m² (3x2)
  const dias = 31; // días de agosto
  const rendimiento = 1; // rendimiento (no se menciona pérdida)

  // Energía en Wh
  const energiaWh = K * horasSol * dias * area * rendimiento;

  // Energía en KWh
  const energiaKWh = energiaWh / 1000;

  // Energía en Kcal (1 kWh = 860 Kcal)
  const energiaKcal = energiaKWh * 860;

  // Mostrar resultado
  const resultado = document.getElementById("resultadoCalor");
  resultado.innerHTML = `Se generan <strong>${energiaKcal.toLocaleString('es-MX', { maximumFractionDigits: 0 })} Kcal</strong> en el mes de agosto.`;
}
