<?php
$numero = $_GET['numero'] ?? 0;

if ($numero > 0) {
    for ($i = 1; $i <= $numero; $i++) {
        echo $i . "<br>";
    }
}
?>
