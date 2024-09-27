<?php
$nome1 = $_GET['nome1'];
$tempo1 = $_GET['tempo1'];

$nome2 = $_GET['nome2'];
$tempo2 = $_GET['tempo2'];

$nome3 = $_GET['nome3'];
$tempo3 = $_GET['tempo3'];

if ($tempo1 < $tempo2 && $tempo1 < $tempo3) {
    $campeao = $nome1;
    if ($tempo2 < $tempo3) {
        $vice = $nome2;
        $terceiro = $nome3;
    } else {
        $vice = $nome3;
        $terceiro = $nome2;
    }
} elseif ($tempo2 < $tempo1 && $tempo2 < $tempo3) {
    $campeao = $nome2;
    if ($tempo1 < $tempo3) {
        $vice = $nome1;
        $terceiro = $nome3;
    } else {
        $vice = $nome3;
        $terceiro = $nome1;
    }
} else {
    $campeao = $nome3;
    if ($tempo1 < $tempo2) {
        $vice = $nome1;
        $terceiro = $nome2;
    } else {
        $vice = $nome2;
        $terceiro = $nome1;
    }
}

echo "<h1 style='text-align: center;'>Campeão: $campeao</h1>";
echo "<h2 style='text-align: center;'>Vice-Campeão: $vice</h2>";
echo "<h3 style='text-align: center;'>Terceiro Lugar: $terceiro</h3>";
?>
