<?php
$numero = $_GET['numero'];
$valorAbsoluto = abs($numero);
print '<h1>Resultado</h1>';
print '<p>O valor absoluto de ' . $numero . ' é: ' . $valorAbsoluto . '</p>';
?>
