<?php
session_start();
require_once '../config/config.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        // Buscar usuário pelo e-mail
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $hash_cadastrado = $usuario['senha'];

            // DEBUG: Verificar se a senha digitada bate com a armazenada
            if (password_verify($senha, $hash_cadastrado)) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['usuario_tipo'] = $usuario['tipo'];

                // Redirecionamento baseado no tipo de usuário
                if ($usuario['tipo'] === "admin") {
                    echo json_encode(["status" => "success", "redirect" => "../../frontend/pages/dashboard_admin.html"]);
                } elseif ($usuario['tipo'] === "medico") {
                    echo json_encode(["status" => "success", "redirect" => "../../frontend/pages/dashboard_medico.html"]);
                } elseif ($usuario['tipo'] === "paciente") {
                    echo json_encode(["status" => "success", "redirect" => "../../frontend/pages/dashboard_paciente.html"]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Tipo de usuário inválido."]);
                }
                exit;
            } else {
                echo json_encode([
                    "status" => "error", 
                    "message" => "Senha incorreta.",
                    "senha_digitada" => $senha, 
                    "hash_no_banco" => $hash_cadastrado
                ]);
                exit;
            }
        } else {
            echo json_encode(["status" => "error", "message" => "E-mail não encontrado."]);
            exit;
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Erro no login: " . $e->getMessage()]);
        exit;
    }
}
?>
