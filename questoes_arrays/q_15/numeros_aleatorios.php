<?php
$n = $_GET['n'] ?? 0;
$array = [];

for ($i = 0; $i < $n; $i++) {
    $array[] = rand(1, 100);
}

rsort($array);

echo "Números Aleatórios: " . implode(", ", $array) . "<br>";
?>
