<?php
require 'conexao.php';

$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM pedido WHERE id = ?");
$query->execute([$id]);
$pedido = $query->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $id_usuario = $_POST['id_usuario'];

    $stmt = $pdo->prepare("UPDATE pedido SET descricao = ?, id_usuario = ? WHERE id = ?");
    $stmt->execute([$descricao, $id_usuario, $id]);

    echo "Pedido atualizado com sucesso!";
}
?>
<form method="POST">
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?= htmlspecialchars($pedido['descricao']) ?>" required>
    <label>ID do Usuário:</label>
    <input type="number" name="id_usuario" value="<?= $pedido['id_usuario'] ?>" required>
    <button type="submit">Salvar Alterações</button>
</form>
