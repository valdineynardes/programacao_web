<?php
$n = $_GET['n'] ?? 0;
$fibonacci = [0, 1];

for ($i = 2; $i < $n; $i++) {
    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo "Os primeiros $n números da sequência de Fibonacci são: " . implode(", ", array_slice($fibonacci, 0, $n)) . "<br>";
?>
