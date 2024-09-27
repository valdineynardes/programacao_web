<?php
$salario = $_GET['salario'];
$tempoServico = $_GET['tempo_servico'];

if ($tempoServico > 60) {
    $salarioFinal = $salario * 1.1;
} else {
    $salarioFinal = $salario;
}

echo "<h1 style='text-align: center;'>O salário final com bônus é R$ " . number_format($salarioFinal, 2, ',', '.') . "</h1>";
?>
