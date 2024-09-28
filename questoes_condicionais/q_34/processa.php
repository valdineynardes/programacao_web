<?php
$salario = $_GET['salario'];
$irpf = 0;

if ($salario <= 1903.98) {
    $irpf = 0;
} elseif ($salario <= 2826.65) {
    $irpf = $salario * 0.075;
} elseif ($salario <= 3751.05) {
    $irpf = $salario * 0.15;
} elseif ($salario <= 4464.68) {
    $irpf = $salario * 0.225;
} else {
    $irpf = $salario * 0.275;
}

print "Salário: R$ $salario<br>";
print "Imposto de Renda a devolver: R$ $irpf";
?>
