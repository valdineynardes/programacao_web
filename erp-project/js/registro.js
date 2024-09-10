document.addEventListener('DOMContentLoaded', function () {
    const registerForm = document.getElementById('registerForm');

    registerForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Simula o cadastro salvando o usuário no localStorage
        const users = JSON.parse(localStorage.getItem('users')) || [];
        users.push({ username, password });
        localStorage.setItem('users', JSON.stringify(users));

        alert('Usuário cadastrado com sucesso!');
        window.location.href = 'index.html';  // Redireciona para a página de login
    });
});
