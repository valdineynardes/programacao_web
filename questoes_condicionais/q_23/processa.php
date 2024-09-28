<?php
$escolha_usuario = $_GET['escolha'];
$opcoes = ['pedra', 'papel', 'tesoura'];
$escolha_computador = $opcoes[rand(0, 2)];

if ($escolha_usuario == $escolha_computador) {
    print "Empate! Você e o computador escolheram $escolha_usuario.";
} elseif (($escolha_usuario == 'pedra' && $escolha_computador == 'tesoura') ||
          ($escolha_usuario == 'papel' && $escolha_computador == 'pedra') ||
          ($escolha_usuario == 'tesoura' && $escolha_computador == 'papel')) {
    print "Você ganhou! Você escolheu $escolha_usuario e o computador escolheu $escolha_computador.";
} else {
    print "Você perdeu! Você escolheu $escolha_usuario e o computador escolheu $escolha_computador.";
}
?>
