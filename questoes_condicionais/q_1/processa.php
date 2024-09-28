<?php
$dia = $_GET['dia'];

switch ($dia) {
    case 1:
        $resultado = "Domingo";
        break;
    case 2:
        $resultado = "Segunda-feira";
        break;
    case 3:
        $resultado = "Terça-feira";
        break;
    case 4:
        $resultado = "Quarta-feira";
        break;
    case 5:
        $resultado = "Quinta-feira";
        break;
    case 6:
        $resultado = "Sexta-feira";
        break;
    case 7:
        $resultado = "Sábado";
        break;
    default:
        $resultado = "Número inválido!";
}

print '<h1>Resultado</h1>';
print '<p>O dia da semana correspondente é: ' . $resultado . '</p>';
?>
