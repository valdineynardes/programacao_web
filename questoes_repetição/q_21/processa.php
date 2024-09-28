<?php
$quantidade = $_GET['quantidade'];
$menor = null;

for ($i = 0; $i < $quantidade; $i++) {
    $numero = (int)readline("Digite um número: ");
    if ($menor === null || $numero < $menor) {
        $menor = $numero;
    }
}

print "O menor número é: $menor";
?>
