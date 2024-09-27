<?php
$numero = $_GET['numero'];

if ($numero > 0) {
    echo "<h1 style='text-align: center;'>O número $numero é Positivo.</h1>";
} elseif ($numero < 0) {
    echo "<h1 style='text-align: center;'>O número $numero é Negativo.</h1>";
} else {
    echo "<h1 style='text-align: center;'>O número $numero é Neutro.</h1>";
}
?>
