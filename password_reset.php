<?php
include_once "db.php";

$recebe_email = $_POST['email'] ?? '';

$consulta_usuario = "SELECT  FROM funcionarios WHERE email = ?";
$stmt = $pdo->prepare($consulta_usuario);

$stmt->execute([$recebe_email]);
?>