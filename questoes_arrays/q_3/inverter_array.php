<?php
$n = $_GET['n'] ?? 1;
$array = range(1, $n);
$array = array_reverse($array);
foreach ($array as $numero) {
    echo $numero . "<br>";
}
?>
