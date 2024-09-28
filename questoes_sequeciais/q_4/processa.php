<?php
$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$mediaHarmonica = 3 / ((1 / $nota1) + (1 / $nota2) + (1 / $nota3));
print '<h1>Resultado</h1>';
print '<p>Aluno: ' . $nome . '</p>';
print '<p>A média harmônica das notas ' . $nota1 . ', ' . $nota2 . ' e ' . $nota3 . ' é: ' . $mediaHarmonica . '</p>';
?>
