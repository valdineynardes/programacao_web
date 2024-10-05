<?php
function ehPerfeito($num) {
    $soma = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }
    return $soma == $num;
}

$limite = intval($_GET['limite']);
$perfeitos = array();

for ($num = 1; $num < $limite; $num++) {
    if (ehPerfeito($num)) {
        $perfeitos[] = $num;
    }
}

$resultado = implode(", ", $perfeitos);
print "Números perfeitos menores que " . $limite . ": " . $resultado . "<br>";
?>
