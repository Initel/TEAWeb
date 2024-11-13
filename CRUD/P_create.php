<?php
include_once("./Crud.php");
?>
<!-- Formulário para cadastrar usuário -->
<div class="container mt-5">
  <h1 class="text-center text-primary">Cadastrar Usuários</h1>
  <form action="" method="post" class="form-horizontal border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
    <div class="form-group mb-3">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
    </div>
    <div class="form-group mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email" required>
    </div>
    <div class="form-group mb-4">
      <label for="senha" class="form-label">Senha:</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
    </div>
    <div class="text-center">
      <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary" style="background-color: #42c7ff; border-color: #42c7ff;">
    </div>
  </form>
</div>

<!-- Adicionando um estilo personalizado -->
<style>
  body {
    background-color: #a2dff7;
  }
  h1 {
    color: #ff82ae;
  }
  .form-control:focus {
    border-color: #ffa600;
    box-shadow: 0 0 5px rgba(255, 166, 0, 0.5);
  }
  .btn-primary:hover {
    background-color: #ffa600;
    border-color: #ffa600;
  }
</style>