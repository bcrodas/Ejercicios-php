<?php
// Mostrar errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Horas trabajadas cada día de la semana (6 días)
$horas = [8, 7, 9, 8, 8, 6];

// Pago por hora
$pagoHora = 5;

// Variable para acumular el total de horas
$totalHoras = 0;

// Ciclo for para sumar las horas trabajadas
for ($i = 0; $i < 6; $i++) {
    $totalHoras += $horas[$i];
}

// Cálculo del sueldo semanal
$sueldo = $totalHoras * $pagoHora;

// resultados
echo "Total de horas trabajadas: $totalHoras<br>";
echo "Sueldo semanal: $sueldo dólares";
?>
