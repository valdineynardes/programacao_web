<?php
$n = $_GET['n'] ?? 1;
$array = [];
for ($i = 1; $i <= $n; $i++) {
    $array[] = $i * $i;
}
foreach ($array as $quadrado) {
    echo $quadrado . "<br>";
}
?>
