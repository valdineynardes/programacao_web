document.addEventListener('DOMContentLoaded', function () {
    const userTableBody = document.getElementById('userTableBody');
    const logoutBtn = document.getElementById('logoutBtn');

    let users = JSON.parse(localStorage.getItem('users')) || [];

    // Função para exibir usuários na tabela
    function displayUsers() {
        userTableBody.innerHTML = '';  // Limpa a tabela

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

    // Função para excluir usuário
    window.deleteUser = function (index) {
        users.splice(index, 1);  // Remove o usuário da lista
        localStorage.setItem('users', JSON.stringify(users));  // Atualiza o localStorage
        displayUsers();
        alert('Usuário excluído com sucesso!');
    }

    // Função para editar usuário
    window.editUser = function (index) {
        const newUsername = prompt('Digite o novo nome de usuário:', users[index].username);

        if (newUsername && newUsername.trim()) {
            // Atualiza o nome de usuário
            users[index].username = newUsername.trim();
            localStorage.setItem('users', JSON.stringify(users));  // Atualiza o localStorage
            displayUsers();
            alert('Usuário atualizado com sucesso!');
        } else {
            alert('Nome de usuário inválido.');
        }
    }

    // Função de Logout
    logoutBtn.addEventListener('click', function () {
        localStorage.removeItem('loggedInUser');
        alert('Você saiu do sistema.');
        window.location.href = 'index.html';  // Redireciona para a página de login
    });

    // Exibe usuários ao carregar a página
    displayUsers();
});
