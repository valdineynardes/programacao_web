<?php
require_once '../config/config.php';

header('Content-Type: application/json');

try {
    $stmt = $pdo->query("SELECT id, nome, email, tipo FROM usuarios WHERE tipo != 'admin'");
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} catch (PDOException $e) {
    echo json_encode(["error" => "Erro ao buscar usuários: " . $e->getMessage()]);
}
?>
