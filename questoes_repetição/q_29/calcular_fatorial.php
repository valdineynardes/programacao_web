<?php
$numero = $_GET['numero'] ?? 0;
$fatorial = 1;

for ($i = $numero; $i > 0; $i--) {
    $fatorial *= $i;
}

echo "O fatorial de $numero é: $fatorial";
?>
