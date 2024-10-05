<?php
$quantidade = intval($_GET['quantidade']);
$lucas = array();

if ($quantidade >= 1) {
    $lucas[] = 2;
}
if ($quantidade >= 2) {
    $lucas[] = 1;
}

for ($i = 2; $i < $quantidade; $i++) {
    $lucas[] = $lucas[$i - 1] + $lucas[$i - 2];
}

$resultado = implode(", ", $lucas);
print "Os primeiros " . $quantidade . " números da sequência de Lucas são: " . $resultado . "<br>";
?>
