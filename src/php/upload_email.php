<?php
$host = "127.0.0.1:3306"; 
$user = "admin"; 
$password = "admin"; 
$dbname = "techtok"; 

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$email = $_POST['email'];

$sql = "INSERT INTO emails (email) VALUES ('$email')";
if (mysqli_query($conn, $sql)) {
    echo "Email cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar email: " . mysqli_error($conn);
}

mysqli_close($conn);
?>