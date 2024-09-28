<?php
$numero = $_GET['numero'];

if ($numero > 0) {
    print '<h1>Resultado</h1>';
    print '<p>O número ' . $numero . ' é positivo.</p>';
} elseif ($numero < 0) {
    print '<h1>Resultado</h1>';
    print '<p>O número ' . $numero . ' é negativo.</p>';
} else {
    print '<h1>Resultado</h1>';
    print '<p>O número ' . $numero . ' é neutro.</p>';
}
?>
