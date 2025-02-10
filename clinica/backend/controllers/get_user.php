<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['usuario_nome'])) {
    echo json_encode(["status" => "error", "message" => "Usuário não autenticado"]);
    exit;
}

echo json_encode([
    "status" => "success",
    "nome" => $_SESSION['usuario_nome'],
    "tipo" => $_SESSION['usuario_tipo']
]);
?>
