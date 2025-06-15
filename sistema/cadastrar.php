<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Ordem de Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cadastrar.css">

    
</head>
<div class="background-image"></div>
<body>
  <div class="page-wrapper">
    <div class="container">
   
      <h2>Cadastrar Ordem de Serviço</h2>

      <?php
      if (isset($_GET['msg']) && isset($_GET['tipo'])) {
          $tipo = htmlspecialchars($_GET['tipo']);
          $msg = htmlspecialchars($_GET['msg']);
          echo "<div class='alert alert-{$tipo}' role='alert'>{$msg}</div>";
      }
      ?>

      <form action="salvar.php" method="POST">
        <div class="mb-3">
          <label>Nome do Cliente</label>
          <input type="text" name="cliente" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Descrição do Serviço</label>
          <textarea name="descricao" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
          <label>Data de Abertura</label>
          <input type="date" name="data_abertura" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Prioridade</label>
          <select name="prioridade" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Baixa">Baixa</option>
            <option value="Média">Média</option>
            <option value="Alta">Alta</option>
          </select>
        </div>
        <div class="mb-3">
          <label>Situação</label>
          <select name="situacao" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Aberto">Aberto</option>
            <option value="Em andamento">Em andamento</option>
            <option value="Concluído">Concluído</option>
          </select>
        </div>

        <div class="form-buttons mt-4">
          <a href="listagem.php" class="btn btn-secondary">Voltar</a>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
      </form>
    </div>


  </div>
</body>
