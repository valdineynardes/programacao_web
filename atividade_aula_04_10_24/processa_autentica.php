<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_hash = md5($senha);
$arquivo = fopen('usuario.txt', 'r');


if ($arquivo) {
    $autenticado = false;

    while (($linha = fgets($arquivo)) !== false) {
        $dados = explode("#$%$#", $linha);
        if ($dados[1] == $email && trim($dados[4]) == $senha_hash) {
            $autenticado = true;
            break;
        }
    }

    fclose($arquivo);

    if ($autenticado) {
        print "Login realizado com sucesso!";
    } else {
        print "E-mail ou senha incorretos!";
    }
} else {
    print "Não foi possível abrir o arquivo de usuários!";
}
?>

