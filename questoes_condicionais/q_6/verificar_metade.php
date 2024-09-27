<?php
$numero = $_GET['numero'];
if ($numero > 20) {
    $metade = $numero / 2;
    echo "<h1 style='text-align: center;'>Metade de $numero é $metade</h1>";
} else {
    echo "<h1 style='text-align: center;'>O número $numero não é maior que 20</h1>";
}
?>
