<?php
if (isset($_GET['palpite'])) {
    $palpite = $_GET['palpite'];
    $numero_aleatorio = rand(1, 10);

    if ($palpite == $numero_aleatorio) {
        echo "Parabéns! Você acertou. O número era $numero_aleatorio.";
    } else {
        echo "Que pena! Você errou. O número era $numero_aleatorio.";
    }
}
?>
