document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch('../../backend/controllers/login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            window.location.href = data.redirect;
        } else {
            document.getElementById('mensagem').innerHTML = data.message;
            document.getElementById('mensagem').style.display = 'block';
        }
    })
    .catch(error => console.error('Erro:', error));
});
