<?php
$numero = $_GET['numero'];

if ($numero > 20) {
    $metade = $numero / 2;
    print '<h1>Resultado</h1>';
    print '<p>A metade de ' . $numero . ' é: ' . $metade . '</p>';
} else {
    print '<h1>Resultado</h1>';
    print '<p>O número deve ser maior que 20.</p>';
}
?>
