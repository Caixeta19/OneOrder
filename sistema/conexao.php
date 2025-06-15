
<?php
$host = "localhost";
$user = "root";
$senha = "12345";
$banco = "oneorder";

$conn = new mysqli($host, $user, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
