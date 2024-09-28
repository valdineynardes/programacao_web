<?php
$codigo = $_GET['codigo'];

if ($codigo >= 1 && $codigo <= 10) {
    $categoria = "Alimentação";
} elseif ($codigo >= 11 && $codigo <= 20) {
    $categoria = "Limpeza";
} elseif ($codigo >= 21 && $codigo <= 30) {
    $categoria = "Eletroeletrônicos";
} else {
    $categoria = "Código inválido!";
}

print '<h1>Resultado</h1>';
print '<p>A categoria do produto é: ' . $categoria . '</p>';
?>
