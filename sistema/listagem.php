<?php
include "conexao.php";
$result = $conn->query("SELECT * FROM ordens ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <div class="background-image"></div>
    <meta charset="UTF-8">
    <title>Listagem de Ordens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="listagem.css">

</head>
<div class="background-image"></div>
<body class="container mt-5">
    <h2>Ordens de Serviço</h2>
    <a href="cadastrar.php" class="btn btn-primary mb-3">Nova Ordem</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Data de Abertura</th>
                <th>Prioridade</th>
                <th>Situação</th>
                <th style="width: 150px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['cliente']) ?></td>
                <td><?= date('d/m/Y', strtotime($row['data_abertura'])) ?></td>
                <td><?= htmlspecialchars($row['prioridade']) ?></td>
                <td><?= htmlspecialchars($row['situacao']) ?></td>
               <td>
  <div class="action-buttons">
    <a href="cadastrar.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
    <a href="excluir.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta ordem?')">Excluir</a>
  </div>
</td>

            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
