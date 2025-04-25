<?php
// Arrays para los días y meses en valenciano
$dias = ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte"];
$meses = ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"];

// Obtener la fecha actual
$diaSemana = date('w'); // 0 (domingo) a 6 (sábado)
$diaMes = date('j');     // Día del mes (1 a 31)
$mes = date('n') - 1;    // Mes (1 a 12) - 1 para usarlo en array
$anyo = date('Y');

// Mostrar la fecha en formato "Dilluns, 2 de Desembre de 2024"
echo "<p style='font-weight: bold; text-align: center; margin-top: 10px;'>
{$dias[$diaSemana]}, $diaMes de {$meses[$mes]} de $anyo
</p>";
?>

