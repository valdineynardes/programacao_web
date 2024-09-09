function calcularTotal() {
    const valorHoraAula = parseFloat(document.getElementById('valorHoraAula').value);
    const totalHorasSemana = parseFloat(document.getElementById('totalHorasSemana').value);
    const totalGeral = valorHoraAula * totalHorasSemana;
    document.getElementById('totalGeral').innerHTML = totalGeral.toFixed(2);
}

function limparFormulario() {
    document.getElementById('nome').value = '';
    document.getElementById('valorHoraAula').value = '';
    document.getElementById('totalHorasSemana').value = '';
    document.getElementById('totalGeral').innerHTML = '';
}
