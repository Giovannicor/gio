<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo 3 - Energía térmica</title>
  <link rel="stylesheet" href="css/problemas.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
</head>
<body>
  <div id="contenedor">

    <div class="problema">
      <h3>Problema:</h3>
      <p>
        Calcula la cantidad de calor (en Kcal) que habrá entrado en una casa durante el mes de agosto si tiene una cristalera de 3 x 2 m y no se han producido pérdidas en el vidrio.<br>
        K = 950 W/m² y considera 10 horas de sol al día.
      </p>
    </div>

    <div class="datos">
      <h3>Datos:</h3>
      <ul>
        <li>Q = Energía generada</li>
        <li>K = Coeficiente de radiación = 950 W/m²</li>
        <li>t = Tiempo = 31 días × 10 horas = 310 h</li>
        <li>S = Área = 3 × 2 = 6 m²</li>
        <li>r = rendimiento = 1</li>
      </ul>
    </div>

    <div class="esquema">
      <h3>Esquema:</h3>
      <img src="images/casa.jpeg" alt="Cristalera" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
    </div>

    <div class="formulas">
      <h3>Fórmulas:</h3>
      <p>Q = K × t × S × r</p>
      <p>Convertir a kWh: Q (Wh) ÷ 1000</p>
      <p>Convertir a Kcal: Q (kWh) × 860</p>
    </div>

    <div class="solucion">
      <h3>Solución:</h3>
      <?php
        // Datos
        $K = 950;       // W/m²
        $t = 31 * 10;   // horas
        $S = 3 * 2;     // m²
        $r = 1;         // rendimiento

        // Cálculo
        $Q_Wh = $K * $t * $S;                 // Energía en Wh
        $Q_kWh = $Q_Wh / 1000;                // Energía en kWh
        $Q_Kcal = $Q_kWh * 860;               // Energía en Kcal
      ?>
      <p><strong>Et</strong> = K × t × S = 950 × (31 × 10) × (3 × 2) m² = <strong><?= number_format($Q_Wh, 0, ',', '.') ?> Wh</strong></p>
      <p>= <strong><?= number_format($Q_kWh, 0, ',', '.') ?> kWh</strong></p>
      <p>= <strong style="color: white; font-size: 18px;"><?= number_format($Q_Kcal, 0, ',', '.') ?> Kcal</strong></p>
    </div>

    <div class="resultado">
      <h3>Resultado:</h3>
      <p>La energía total que entra por la cristalera en agosto es de <strong><?= number_format($Q_Kcal, 0, ',', '.') ?> Kcal</strong>.</p>
    </div>

  </div>
</body>
</html>
