<?php
$numero = $_GET['numero'];
if ($numero < 0) {
    $valor_absoluto = -$numero;
} else {
    $valor_absoluto = $numero;
}
echo "<h1 style='text-align: center;'>O valor absoluto é: $valor_absoluto</h1>";
?>
