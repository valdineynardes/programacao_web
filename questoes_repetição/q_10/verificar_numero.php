<?php
$numero = $_GET['numero'] ?? 0;

if ($numero > 0) {
    echo "O número $numero é positivo.";
} elseif ($numero < 0) {
    echo "O número $numero é negativo.";
} else {
    echo "O número é neutro.";
}
?>
