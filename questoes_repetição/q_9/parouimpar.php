<?php
$numero = $_GET['numero'] ?? 0;

if ($numero % 2 == 0) {
    echo "O número $numero é par.";
} else {
    echo "O número $numero é ímpar.";
}
?>
