<?php
$host = "127.0.0.1:3306"; // nome do serviço do banco de dados no Docker Compose
$user = "admin"; // usuário com permissões de escrita no banco de dados
$password = "admin"; // senha do usuário
$dbname = "techtok"; // nome do banco de dados

// Estabelece a conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Recebe o email do usuário através do método POST
$email = $_POST['email'];

// Insere o email na tabela "emails"
$sql = "INSERT INTO emails (email) VALUES ('$email')";
if (mysqli_query($conn, $sql)) {
    echo "Email cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar email: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>