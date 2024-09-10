document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        const users = JSON.parse(localStorage.getItem('users')) || [];

        const user = users.find(user => user.username === username && user.password === password);

        if (user) {
            localStorage.setItem('loggedInUser', JSON.stringify(user));
            alert('Login bem-sucedido!');
            window.location.href = 'dashboard.html';  // Redireciona para o dashboard após o login
        } else {
            alert('Usuário ou senha inválidos.');
        }
    });
});
