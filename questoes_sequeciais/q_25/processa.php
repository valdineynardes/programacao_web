<?php
$nome = $_GET['nome'];
$peso = $_GET['peso'];
$agua = $peso * 0.05;
$carboidratos = $peso * 6;
$proteinas = $peso * 2.5;
print '<h1>Necessidades Diárias de ' . $nome . '</h1>';
print '<p>Quantidade de água recomendada: ' . $agua . ' litros</p>';
print '<p>Quantidade de carboidratos recomendada: ' . $carboidratos . ' g</p>';
print '<p>Quantidade de proteínas recomendada: ' . $proteinas . ' g</p>';
?>
