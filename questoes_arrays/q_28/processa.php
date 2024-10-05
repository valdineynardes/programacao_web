<?php
$quantidade = intval($_GET['quantidade']);
$fibonacci = array();

if ($quantidade >= 1) {
    $fibonacci[] = 0;
}
if ($quantidade >= 2) {
    $fibonacci[] = 1;
}

for ($i = 2; $i < $quantidade; $i++) {
    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

$resultado = implode(", ", $fibonacci);
print "Os primeiros " . $quantidade . " números da sequência de Fibonacci são: " . $resultado . "<br>";
?>
