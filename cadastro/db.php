<?php
// Configurações do Banco de Dados
$host = 'localhost';
$dbname = 'sngme_db';
$user = 'root';
$pass = '';

try {
    // Conexão usando PDO para maior segurança
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Em produção, não mostre o erro detalhado
    // die("Erro na conexão: " . $e->getMessage());
    
    // Fallback ou Log
    error_log($e->getMessage());
}
?>
