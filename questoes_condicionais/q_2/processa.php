<?php
$mes = $_GET['mes'];

switch ($mes) {
    case 1:
        $resultado = "Janeiro";
        break;
    case 2:
        $resultado = "Fevereiro";
        break;
    case 3:
        $resultado = "Março";
        break;
    case 4:
        $resultado = "Abril";
        break;
    case 5:
        $resultado = "Maio";
        break;
    case 6:
        $resultado = "Junho";
        break;
    case 7:
        $resultado = "Julho";
        break;
    case 8:
        $resultado = "Agosto";
        break;
    case 9:
        $resultado = "Setembro";
        break;
    case 10:
        $resultado = "Outubro";
        break;
    case 11:
        $resultado = "Novembro";
        break;
    case 12:
        $resultado = "Dezembro";
        break;
    default:
        $resultado = "Número inválido!";
}

print '<h1>Resultado</h1>';
print '<p>O mês correspondente é: ' . $resultado . '</p>';
?>
