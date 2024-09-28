<?php
$numero = $_GET['numero'];

if ($numero % 2 == 0) {
    print '<h1>Resultado</h1>';
    print '<p>O número ' . $numero . ' é par.</p>';
} else {
    print '<h1>Resultado</h1>';
    print '<p>O número ' . $numero . ' é ímpar.</p>';
}
?>
