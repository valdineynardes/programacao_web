<?php
$salario = $_GET['salario'];
$tempo_servico = $_GET['tempo_servico'];

if ($tempo_servico > 60) {
    $bonus = $salario * 0.10;
    $salario_final = $salario + $bonus;
    print "Salário original: R$ $salario<br>";
    print "Bônus de 10%: R$ $bonus<br>";
    print "Salário final com bônus: R$ $salario_final";
} else {
    print "Salário: R$ $salario<br>";
    print "Nenhum bônus aplicado.";
}
?>
