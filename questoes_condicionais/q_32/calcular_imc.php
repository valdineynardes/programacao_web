<?php
$peso = $_GET['peso'];
$altura = $_GET['altura'];
$imc = $peso / ($altura * $altura);
$mensagem = "";

if ($imc < 20) {
    $mensagem = "Você está abaixo do peso. (IMC: " . number_format($imc, 2) . ")";
} elseif ($imc >= 20 && $imc <= 25) {
    $mensagem = "Você está com o peso normal. (IMC: " . number_format($imc, 2) . ")";
} elseif ($imc > 25 && $imc <= 30) {
    $mensagem = "Você está com sobrepeso. (IMC: " . number_format($imc, 2) . ")";
} else {
    $mensagem = "Você está obeso. (IMC: " . number_format($imc, 2) . ")";
}

echo "<div style='font-family: Arial, sans-serif; font-size: 20px; font-weight: bold; text-align: center; margin-top: 20px;'>
        $mensagem
      </div>";
?>
