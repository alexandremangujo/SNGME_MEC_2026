<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $cargo = $_POST['cargo'] ?? '';
    $departamento = $_POST['departamento'] ?? '';

    // Validação básica
    if (empty($nome) || empty($email) || empty($cargo) || empty($departamento)) {
        header('Location: index.php?status=error');
        exit;
    }

    try {
        // Se a conexão PDO existir e estiver funcionando
        if (isset($pdo)) {
            $sql = "INSERT INTO funcionarios (nome, email, cargo, departamento) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nome, $email, $cargo, $departamento]);

            header('Location: index.php?status=success');
            exit;
        } else {
            // Nota: Se não houver banco configurado, redirecionamos com sucesso
            // apenas para demonstração visual neste exemplo
            header('Location: index.php?status=success');
            exit;
        }
    } catch (PDOException $e) {
        header('Location: index.php?status=error');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>