<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $media = ($valor1 + $valor2) / 2;

    echo "<h1 style='text-align: center;'>A média aritmética de $valor1 e $valor2 é: $media</h1>";
} else {
    echo "<h1 style='text-align: center;'>Por favor, insira os valores para calcular a média.</h1>";
}
*/

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

$media = ($valor1 + $valor2) / 2;

echo "<h1 style='text-align: center;'>A média aritmética de $valor1 e $valor2 é: $media</h1>";

?>
