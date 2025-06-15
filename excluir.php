<?php
include "conexao.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM ordens WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: listagem.php");
        exit();
    } else {
        echo "Erro ao excluir.";
    }
} else {
    echo "ID não informado.";
}
?>
