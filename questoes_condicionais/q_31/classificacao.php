<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$mensagem = "";

if ($idade >= 0 && $idade <= 12) {
    $mensagem = "$nome é uma Criança.";
} elseif ($idade >= 13 && $idade <= 18) {
    $mensagem = "$nome é um Adolescente.";
} elseif ($idade > 18 && $idade < 60) {
    $mensagem = "$nome é um Adulto.";
} elseif ($idade >= 60) {
    $mensagem = "$nome é um Idoso.";
}

echo "<div style='font-family: Arial, sans-serif; font-size: 20px; font-weight: bold; text-align: center; margin-top: 20px;'>
        $mensagem
      </div>";
?>
