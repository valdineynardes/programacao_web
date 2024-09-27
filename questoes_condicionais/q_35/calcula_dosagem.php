<?php
$idade = $_GET['idade'];
$peso = $_GET['peso'];
$dosagem = 0;
$mensagem = "";

if ($idade >= 12 && $peso >= 60) {
    $dosagem = 40;
    $mensagem = "Pessoas com 12 anos ou mais e peso igual ou superior a 60 kg devem tomar 40 gotas.";
} elseif ($idade >= 12 && $peso < 60) {
    $dosagem = 30;
    $mensagem = "Pessoas com 12 anos ou mais e peso abaixo de 60 kg devem tomar 30 gotas.";
} elseif ($idade < 12) {
    $dosagem = $peso / 2;
    $mensagem = "Crianças abaixo de 12 anos devem tomar 1 gota a cada 2 kg de peso.";
}

echo "<div style='font-family: Arial, sans-serif; font-size: 20px; text-align: center; margin-top: 20px;'>
        Idade: $idade anos<br>
        Peso: $peso kg<br>
        Dosagem recomendada: $dosagem gotas<br>
        $mensagem
      </div>";
?>
