<?php
$numero = $_GET['numero'];

if ($numero < 0) {
    $numero = -$numero;
}

print '<h1>Resultado</h1>';
print '<p>O valor absoluto é: ' . $numero . '</p>';
?>
