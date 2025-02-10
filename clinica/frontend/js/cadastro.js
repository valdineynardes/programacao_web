document.getElementById('tipo').addEventListener('change', function() {
    let isMedico = this.value === "medico";

    document.getElementById('medicoFields').style.display = isMedico ? "block" : "none";
    document.getElementById('pacienteFields').style.display = !isMedico ? "block" : "none";
});

document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    let formData = new FormData(this);
    let tipo = document.getElementById('tipo').value;

    if (tipo === "medico") {
        formData.delete("data_nascimento");
        formData.delete("telefone");
    } else {
        formData.delete("especialidade");
        formData.delete("crm");
    }

    fetch('../../backend/controllers/cadastro.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('mensagem').innerHTML = data;
        document.getElementById('mensagem').style.display = 'block';

        document.getElementById('cadastroForm').reset();
        document.getElementById('medicoFields').style.display = "none";
        document.getElementById('pacienteFields').style.display = "block";
    })
    .catch(error => console.error('Erro:', error));
});
