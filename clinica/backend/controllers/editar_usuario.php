<?php
session_start();
require_once '../config/config.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];

    try {
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, tipo = ? WHERE id = ?");
        $stmt->execute([$nome, $email, $tipo, $id]);

        echo json_encode(["status" => "success", "message" => "Usuário atualizado com sucesso!"]);
        exit;
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Erro ao atualizar usuário: " . $e->getMessage()]);
        exit;
    }
}
?>
