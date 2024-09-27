<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operacao = $_GET['operacao'];

$resultado = 0;

if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
} elseif ($operacao == "-") {
    $resultado = $numero1 - $numero2;
} elseif ($operacao == "*") {
    $resultado = $numero1 * $numero2;
} elseif ($operacao == "/") {
    if ($numero2 != 0) {
        $resultado = $numero1 / $numero2;
    } else {
        echo "<div class='container mt-5'><h1 class='text-center text-danger'>Erro! Divisão por zero.</h1></div>";
        exit;
    }
}

echo "<div class='container mt-5'>";
echo "<h1 class='text-center'>Resultado</h1>";
echo "<p class='text-center'><strong>Operação:</strong> $numero1 $operacao $numero2</p>";
echo "<h3 class='text-center'>Resultado: $resultado</h3>";
echo "<a href='index.html' class='btn btn-primary d-block mx-auto' style='width: 200px;'>Novo Cálculo</a>";
echo "</div>";
?>
