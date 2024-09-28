<?php
$num = $_GET['numero'];
$divisores = [];

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisores[] = $i;
    }
}

print "Os divisores de $num são: " . implode(", ", $divisores);
?>
