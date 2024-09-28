<?php
$idade = $_GET['idade'];
$peso = $_GET['peso'];
$dosagem = 0;

if ($idade >= 12) {
    if ($peso >= 60) {
        $dosagem = 40;
    } else {
        $dosagem = 30;
    }
} else {
    $dosagem = $peso / 2;
}

print "Idade: $idade anos<br>";
print "Peso: $peso kg<br>";
print "Dosagem: $dosagem gotas";
?>
