<?php
$numero = $_GET['numero'] ?? 0;

if ($numero > 0) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}
?>
