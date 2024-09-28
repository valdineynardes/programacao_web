<?php
$intervalo_inferior = $_GET['intervalo_inferior'];
$intervalo_superior = $_GET['intervalo_superior'];

if ($intervalo_inferior > $intervalo_superior) {
    print "O intervalo inferior deve ser menor que o superior.";
    exit;
}

$soma = 0;
for ($i = $intervalo_inferior; $i <= $intervalo_superior; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

print "A soma dos números ímpares entre $intervalo_inferior e $intervalo_superior é: $soma";
?>
