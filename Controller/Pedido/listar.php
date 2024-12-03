<?php
require 'conexao.php';

$query = $pdo->query("SELECT * FROM pedidos");
$pedidos = $query->fetchAll(PDO::FETCH_ASSOC);


?>
