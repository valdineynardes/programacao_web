<?php
require_once '../config/config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];

    try {

        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $senha, $tipo]);


        $usuario_id = $pdo->lastInsertId();

        if ($tipo === "medico") {
            if (!isset($_POST['especialidade']) || !isset($_POST['crm']) || empty($_POST['especialidade']) || empty($_POST['crm'])) {
                echo "Erro: Especialidade e CRM são obrigatórios para médicos.";
                exit;
            }

            $especialidade = $_POST['especialidade'];
            $crm = $_POST['crm'];


            $stmt = $pdo->prepare("INSERT INTO medicos (usuario_id, especialidade, crm) VALUES (?, ?, ?)");
            $stmt->execute([$usuario_id, $especialidade, $crm]);

            echo "Médico cadastrado com sucesso!";
        } elseif ($tipo === "paciente") {
            $data_nascimento = $_POST['data_nascimento'];
            $telefone = $_POST['telefone'];


            $stmt = $pdo->prepare("INSERT INTO pacientes (usuario_id, data_nascimento, telefone) VALUES (?, ?, ?)");
            $stmt->execute([$usuario_id, $data_nascimento, $telefone]);

            echo "Paciente cadastrado com sucesso!";
        }
    } catch (PDOException $e) {
        echo "Erro no cadastro: " . $e->getMessage();
    }
}
?>
