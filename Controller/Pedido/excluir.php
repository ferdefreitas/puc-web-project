<?php
require 'conexao.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM pedido WHERE id = ?");
$stmt->execute([$id]);

echo "Pedido excluído com sucesso!";
?>
