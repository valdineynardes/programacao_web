function verificarSenha() {
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmar_senha").value;
    if (senha !== confirmarSenha) {
        alert("As senhas não coincidem!");
        return false;
    }
    return true;
}