<?php
$inicio = $_GET['inicio'] ?? 0;
$fim = $_GET['fim'] ?? 0;

for ($i = $inicio; $i <= $fim; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
