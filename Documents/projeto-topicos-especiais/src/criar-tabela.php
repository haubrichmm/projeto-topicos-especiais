<?php
$host = 'mysql';
$db = 'meu_banco';
$user = 'meu_usuario';
$pass = 'minha_senha';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100)
);

INSERT INTO usuarios (nome) VALUES ('Maria'), ('João'), ('Carlos');
";

if ($conn->multi_query($sql)) {
    echo "Tabela criada e dados inseridos com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();