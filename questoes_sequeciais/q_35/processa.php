<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

$resultado = ($numero1 != $numero2);

print '<h1>Resultado da Comparação</h1>';
print '<p>A desigualdade entre ' . $numero1 . ' e ' . $numero2 . ' é: ' . ($resultado ? 'Verdadeiro' : 'Falso') . '</p>';
?>
