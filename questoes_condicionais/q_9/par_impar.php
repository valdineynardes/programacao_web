<?php
$numero = $_GET['numero'];
if ($numero % 2 == 0) {
    echo "<h1 style='text-align: center;'>O número $numero é Par.</h1>";
} else {
    echo "<h1 style='text-align: center;'>O número $numero é Ímpar.</h1>";
}
?>
