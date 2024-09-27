<?php
$n = $_GET['n'] ?? 0;
$lucas = [2, 1];

for ($i = 2; $i < $n; $i++) {
    $lucas[] = $lucas[$i - 1] + $lucas[$i - 2];
}

echo "Os primeiros $n números da sequência de Lucas são: " . implode(", ", array_slice($lucas, 0, $n)) . "<br>";
?>
