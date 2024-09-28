<?php
$estado = strtoupper($_GET['estado']);
$nome = $_GET['nome'];

if ($estado == 'RJ') {
    print "$nome é carioca.";
} elseif ($estado == 'SP') {
    print "$nome é paulista.";
} elseif ($estado == 'MG') {
    print "$nome é mineiro.";
} else {
    print "$nome é de outro estado.";
}
?>
