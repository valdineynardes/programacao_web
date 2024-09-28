<?php
$quantidade = $_GET['quantidade'];
$numeros = explode(',', $_GET['numeros']);

if (count($numeros) != $quantidade) {
    print "A quantidade de números informados não corresponde ao esperado.";
    exit;
}

$maior = null;

foreach ($numeros as $numero) {
    $numero = trim($numero);
    if (!is_numeric($numero)) {
        print "Todos os valores devem ser numéricos.";
        exit;
    }

    if ($maior === null || $numero > $maior) {
        $maior = $numero;
    }
}

print "O maior número lido é: $maior";
?>
