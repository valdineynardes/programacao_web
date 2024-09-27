<?php
$nome = $_GET['nome'];
$peso = $_GET['peso'];

// Calcular recomendações diárias
$agua_litros = $peso * 0.05; // 50 ml = 0.05 litros por kg corporal
$carboidratos = $peso * 6; // 6 g de carboidratos por kg corporal
$proteinas = $peso * 2.5; // 2.5 g de proteínas por kg corporal

echo "<h1 style='text-align: center;'>Recomendações diárias para $nome</h1>";
echo "<h2 style='text-align: center;'>Água: $agua_litros litros</h2>";
echo "<h2 style='text-align: center;'>Carboidratos: $carboidratos g</h2>";
echo "<h2 style='text-align: center;'>Proteínas: $proteinas g</h2>";
?>
