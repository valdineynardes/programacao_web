<?php
$codigo = $_GET['codigo'];
$categoria = "";

if ($codigo >= 1 && $codigo <= 10) {
    $categoria = "Alimentação";
} elseif ($codigo >= 11 && $codigo <= 20) {
    $categoria = "Limpeza";
} elseif ($codigo >= 21 && $codigo <= 30) {
    $categoria = "Eletrônicos";
} else {
    $categoria = "Código de produto inválido.";
}

echo "<h1 style='text-align: center;'>Categoria: $categoria</h1>";
?>
