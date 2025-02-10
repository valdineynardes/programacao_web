document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".btn-editar").forEach(button => {
        button.addEventListener("click", function () {
            let userId = this.getAttribute("data-id");
            let userName = this.getAttribute("data-nome");
            let userEmail = this.getAttribute("data-email");
            let userType = this.getAttribute("data-tipo");

            document.getElementById("editUserId").value = userId;
            document.getElementById("editUserName").value = userName;
            document.getElementById("editUserEmail").value = userEmail;
            document.getElementById("editUserType").value = userType;

            let editModal = new bootstrap.Modal(document.getElementById("editUserModal"));
            editModal.show();
        });
    });

    document.getElementById("editUserForm").addEventListener("submit", function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        fetch("../../backend/controllers/editar_usuario.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            location.reload();
        })
        .catch(error => console.error("Erro:", error));
    });
});
