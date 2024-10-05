<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$data_nascimento = $_POST['data_nascimento'];
$senha = $_POST['senha'];

$senha_hash = md5($senha);
$dados = $nome . "#$%$#" . $email . "#$%$#" . $endereco . "#$%$#" . $data_nascimento . "#$%$#" . $senha_hash . "\n";


$arquivo = fopen('usuario.txt', 'a');
fwrite($arquivo, $dados);
fclose($arquivo);

print "Cadastro realizado com sucesso!";
?>
