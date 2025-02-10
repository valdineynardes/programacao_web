<?php
require_once '../config/config.php';

if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        echo "Usuário excluído com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao excluir: " . $e->getMessage();
    }
}
?>
