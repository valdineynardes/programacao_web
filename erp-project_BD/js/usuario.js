document.addEventListener('DOMContentLoaded', function () {
    const userTableBody = document.getElementById('userTableBody');
    const logoutBtn = document.getElementById('logoutBtn');

    let users = JSON.parse(localStorage.getItem('users')) || [];

    function displayUsers() {
        userTableBody.innerHTML = '';

        users.forEach((user, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${user.username}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editUser(${index})">Editar</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteUser(${index})">Excluir</button>
                </td>
            `;
            userTableBody.appendChild(row);
        });
    }

    window.deleteUser = function (index) {
        users.splice(index, 1);
        localStorage.setItem('users', JSON.stringify(users));
        displayUsers();
        alert('Usuário excluído com sucesso!');
    }

    window.editUser = function (index) {
        const newUsername = prompt('Digite o novo nome de usuário:', users[index].username);

        if (newUsername && newUsername.trim()) {

            users[index].username = newUsername.trim();
            localStorage.setItem('users', JSON.stringify(users));
            displayUsers();
            alert('Usuário atualizado com sucesso!');
        } else {
            alert('Nome de usuário inválido.');
        }
    }

    logoutBtn.addEventListener('click', function () {
        localStorage.removeItem('loggedInUser');
        alert('Você saiu do sistema.');
        window.location.href = 'index.html';
    });

    displayUsers();
});
