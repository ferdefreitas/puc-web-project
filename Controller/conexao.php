<?php
// Configurações do banco de dados
$host = "localhost"; // Endereço do servidor
$dbname = "LojaVirtual"; // Nome do banco de dados
$username = "root"; // Usuário do banco (altere conforme necessário)
$password = ""; // Senha do banco (altere conforme necessário)

try {
    // Criando uma nova conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configurando o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Em caso de erro, exibe uma mensagem
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    exit;
}
?>
