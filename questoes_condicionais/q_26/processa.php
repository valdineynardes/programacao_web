<?php
$x = $_GET['x'];
$y = $_GET['y'];

if ($x > 0 && $y > 0) {
    print "O ponto está no Primeiro Quadrante.";
} elseif ($x < 0 && $y > 0) {
    print "O ponto está no Segundo Quadrante.";
} elseif ($x < 0 && $y < 0) {
    print "O ponto está no Terceiro Quadrante.";
} elseif ($x > 0 && $y < 0) {
    print "O ponto está no Quarto Quadrante.";
} elseif ($x == 0 && $y != 0) {
    print "O ponto está no Eixo Y.";
} elseif ($y == 0 && $x != 0) {
    print "O ponto está no Eixo X.";
} else {
    print "O ponto está na Origem.";
}
?>
