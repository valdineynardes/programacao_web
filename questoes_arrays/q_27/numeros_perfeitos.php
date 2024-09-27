<?php
$n = $_GET['n'] ?? 0;
$numeros_perfeitos = [];

for ($i = 1; $i < $n; $i++) {
    $soma_divisores = 0;

    for ($j = 1; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $soma_divisores += $j;
        }
    }

    if ($soma_divisores == $i) {
        $numeros_perfeitos[] = $i;
    }
}

echo "Os números perfeitos menores que $n são: " . implode(", ", $numeros_perfeitos) . "<br>";
?>
