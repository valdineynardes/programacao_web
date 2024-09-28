<?php
$atleta1 = $_GET['atleta1'];
$tempo1 = $_GET['tempo1'];
$atleta2 = $_GET['atleta2'];
$tempo2 = $_GET['tempo2'];
$atleta3 = $_GET['atleta3'];
$tempo3 = $_GET['tempo3'];

if ($tempo1 < $tempo2 && $tempo1 < $tempo3) {
    $campeao = $atleta1;
    if ($tempo2 < $tempo3) {
        $vice = $atleta2;
        $terceiro = $atleta3;
    } else {
        $vice = $atleta3;
        $terceiro = $atleta2;
    }
} elseif ($tempo2 < $tempo1 && $tempo2 < $tempo3) {
    $campeao = $atleta2;
    if ($tempo1 < $tempo3) {
        $vice = $atleta1;
        $terceiro = $atleta3;
    } else {
        $vice = $atleta3;
        $terceiro = $atleta1;
    }
} else {
    $campeao = $atleta3;
    if ($tempo1 < $tempo2) {
        $vice = $atleta1;
        $terceiro = $atleta2;
    } else {
        $vice = $atleta2;
        $terceiro = $atleta1;
    }
}

print "Campeão: $campeao<br>";
print "Vice-Campeão: $vice<br>";
print "Terceiro Lugar: $terceiro";
?>
