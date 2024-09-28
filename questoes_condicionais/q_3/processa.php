<?php
$dia = $_GET['dia'];

if ($dia >= 1 && $dia <= 7) {
    if ($dia == 6 || $dia == 7) {
        $resultado = "Final de semana";
    } else {
        $resultado = "Dia útil";
    }
} else {
    $resultado = "Número inválido!";
}

print '<h1>Resultado</h1>';
print '<p>O dia correspondente é: ' . $resultado . '</p>';
?>
