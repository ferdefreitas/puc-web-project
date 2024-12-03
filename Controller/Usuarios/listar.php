<?php
require 'conexao.php';

$query = $pdo->query("SELECT * FROM login");
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

include 'View/Usuarios/listar.php';
?>