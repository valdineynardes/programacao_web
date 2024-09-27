<?php
$salario = $_GET['salario'];
$aliquota = 0;
$valor_irpf = 0;

if ($salario <= 1903.98) {
    $aliquota = 0;
    $valor_irpf = 0;
    $mensagem = "Salário isento de imposto.";
} elseif ($salario <= 2826.65) {
    $aliquota = 7.5 / 100;
    $valor_irpf = $salario * $aliquota;
    $mensagem = "Salário na faixa de 7,5% de imposto.";
} elseif ($salario <= 3751.05) {
    $aliquota = 15 / 100;
    $valor_irpf = $salario * $aliquota;
    $mensagem = "Salário na faixa de 15% de imposto.";
} elseif ($salario <= 4464.68) {
    $aliquota = 22.5 / 100;
    $valor_irpf = $salario * $aliquota;
    $mensagem = "Salário na faixa de 22,5% de imposto.";
} else {
    $aliquota = 27.5 / 100;
    $valor_irpf = $salario * $aliquota;
    $mensagem = "Salário na faixa de 27,5% de imposto.";
}

echo "<div style='font-family: Arial, sans-serif; font-size: 20px; text-align: center; margin-top: 20px;'>
        Salário: R$ " . number_format($salario, 2, ',', '.') . "<br>
        Alíquota aplicada: " . ($aliquota * 100) . "%<br>
        Valor do IRPF a ser pago: R$ " . number_format($valor_irpf, 2, ',', '.') . "<br>
        $mensagem
      </div>";
?>
