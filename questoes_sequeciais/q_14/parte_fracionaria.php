<?php
$numero = $_GET['numero'];

$parte_fracionaria = $numero - floor($numero);

echo "<h1 style='text-align: center;'>A parte fracionária de $numero é: $parte_fracionaria</h1>";
?>
