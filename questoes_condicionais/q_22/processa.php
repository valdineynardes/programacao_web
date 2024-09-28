<?php
$numero_aleatorio = rand(1, 10);
$palpite = $_GET['palpite'];

if ($palpite == $numero_aleatorio) {
    print "Você acertou! O número era $numero_aleatorio.";
} else {
    print "Você errou! O número era $numero_aleatorio.";
}
?>
