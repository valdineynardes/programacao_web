<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];

if ($idade >= 0 && $idade <= 12) {
    print "$nome é Criança.";
} elseif ($idade >= 13 && $idade <= 18) {
    print "$nome é Adolescente.";
} elseif ($idade >= 19 && $idade <= 60) {
    print "$nome é Adulto.";
} elseif ($idade >= 61) {
    print "$nome é Idoso.";
} else {
    print "Idade inválida.";
}
?>
