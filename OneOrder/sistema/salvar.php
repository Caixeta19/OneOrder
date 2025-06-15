
<?php
include "conexao.php";

$cliente = $_POST['cliente'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$data = $_POST['data_abertura'] ?? '';
$prioridade = $_POST['prioridade'] ?? '';
$situacao = $_POST['situacao'] ?? '';

if (empty($cliente) || empty($descricao) || empty($data) || empty($prioridade) || empty($situacao)) {
    header("Location: cadastrar.php?msg=Preencha todos os campos.&tipo=danger");
    exit;
}

$sql = "INSERT INTO ordens (cliente, descricao, data_abertura, prioridade, situacao)
        VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $cliente, $descricao, $data, $prioridade, $situacao);

if ($stmt->execute()) {
    header("Location: cadastrar.php?msg=Ordem cadastrada com sucesso!&tipo=success");
} else {
    header("Location: cadastrar.php?msg=Erro ao cadastrar ordem.&tipo=danger");
}
?>
