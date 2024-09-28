<?php
$nomes = [];
for ($i = 1; $i <= 20; $i++) {
    $nome = $_GET["nome$i"];
    $idade = $_GET["idade$i"];
    $sexo = $_GET["sexo$i"];
    
    if ($sexo == "masculino" && $idade > 21) {
        $nomes[] = strtoupper($nome);
    }
}

print "Nomes em maiúsculo de homens com mais de 21 anos:<br>";
foreach ($nomes as $nome) {
    print "$nome<br>";
}
?>
