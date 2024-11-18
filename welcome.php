<?php
 // Constantes para facilitar la conversión
 const MILISEGUNDOS_POR_SEGUNDO = 1000;
 const SEGUNDOS_POR_MINUTO = 60;
 const MINUTOS_POR_HORA = 60;
 const HORAS_POR_DIA = 24;
function diasHorasMinutosSegundosAMilisegundos($dias, $horas, $minutos, $segundos) {
 

  // Convertimos cada unidad a milisegundos y sumamos los resultados
  $milisegundos = 
      ($dias * HORAS_POR_DIA * MINUTOS_POR_HORA * SEGUNDOS_POR_MINUTO * MILISEGUNDOS_POR_SEGUNDO) +
      ($horas * MINUTOS_POR_HORA * SEGUNDOS_POR_MINUTO * MILISEGUNDOS_POR_SEGUNDO) +
      ($minutos * SEGUNDOS_POR_MINUTO * MILISEGUNDOS_POR_SEGUNDO) +
      ($segundos * MILISEGUNDOS_POR_SEGUNDO);

  return $milisegundos;
}

// Ejemplo de uso:
$dias = 2;
$horas = 3;
$minutos = 30;
$segundos = 15;

$milisegundosTotales = diasHorasMinutosSegundosAMilisegundos($dias, $horas, $minutos, $segundos);
echo "El equivalente en milisegundos es: " . $milisegundosTotales;
?>
