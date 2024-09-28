<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$media = ($nota1 + $nota2) / 2;

if ($media >= 70) {
    print "Aprovado";
} elseif ($media < 30) {
    print "Reprovado";
} else {
    $nota_final = $_GET['nota_final'];
    if ($nota_final >= 30) {
        $media_final = ($nota_final * (2/3)) + ($media * (1/3));
        if ($media_final >= 50) {
            print "Aprovado por Final";
        } else {
            print "Reprovado";
        }
    } else {
        print "Reprovado";
    }
}
?>
