function verificarSenha() {
    let senha = document.getElementById("senha").value;
    let confirmarSenha = document.getElementById("confirmar_senha").value;
    if (senha !== confirmarSenha) {
        alert("As senhas não coincidem!");
        return false;
    }
    return true;
}