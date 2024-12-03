<?php
require '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $id_usuario = $_POST['id_usuario'];

    $stmt = $pdo->prepare("INSERT INTO pedido (descricao, id_usuario) VALUES (?, ?)");
    $stmt->execute([$descricao, $id_usuario]);

    http_redirect('listar.php');
}
?>

