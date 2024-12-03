<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO login (nome, senha) VALUES (?, ?)");
    $stmt->execute([$nome, $senha]);

    echo "Usuário criado com sucesso!";
}
?>

