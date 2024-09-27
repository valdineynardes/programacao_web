<?php
$nome = $_GET['nome'];
$estado = strtoupper($_GET['estado']); // Converte a sigla para maiúscula para facilitar a comparação

if ($estado == 'RJ') {
    echo "$nome é carioca.";
} elseif ($estado == 'SP') {
    echo "$nome é paulista.";
} elseif ($estado == 'MG') {
    echo "$nome é mineira.";
} else {
    echo "$nome é de outro estado.";
}
?>
