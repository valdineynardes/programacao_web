<?php
$x = $_GET['x'];
$y = $_GET['y'];
$quadrante = '';

if ($x > 0 && $y > 0) {
    $quadrante = 'Primeiro Quadrante';
} elseif ($x < 0 && $y > 0) {
    $quadrante = 'Segundo Quadrante';
} elseif ($x < 0 && $y < 0) {
    $quadrante = 'Terceiro Quadrante';
} elseif ($x > 0 && $y < 0) {
    $quadrante = 'Quarto Quadrante';
} elseif ($x == 0 && $y != 0) {
    $quadrante = 'Eixo Y';
} elseif ($y == 0 && $x != 0) {
    $quadrante = 'Eixo X';
} else {
    $quadrante = 'Origem';
}

echo "<div class='container mt-5'>";
echo "<h1 class='text-center'>Resultado</h1>";
echo "<p class='text-center'><strong>Coordenadas:</strong> ($x, $y)</p>";
echo "<h3 class='text-center'>O ponto está no: $quadrante</h3>";
echo "<a href='index.html' class='btn btn-primary d-block mx-auto' style='width: 200px;'>Novo Ponto</a>";
echo "</div>";
?>
