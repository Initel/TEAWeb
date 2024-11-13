<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Excluir Usuário</title>
    <style>
        body {
            background-color: #a2dff7; /* Cor de fundo suave */
            font-family: Arial, sans-serif; /* Fonte legível */
        }

        .container {
            margin-top: 50px;
            padding: 20px;
            background-color: #fff; /* Fundo branco para o formulário */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        h1 {
            color: #ff82ae; /* Cor do título */
        }

        .btn-danger {
            background-color: #ff82ae; /* Cor do botão */
            border-color: #ff82ae; /* Cor da borda do botão */
            transition: background-color 0.3s, transform 0.3s; /* Efeito de transição */
        }

        .btn-danger:hover {
            background-color: #ffa600; /* Cor do botão ao passar o mouse */
            border-color: #ffa600; /* Cor da borda ao passar o mouse */
            transform: scale(1.05); /* Efeito de aumento ao passar o mouse */
        }

        .form-control {
            border-radius: 5px; /* Bordas arredondadas para os campos de entrada */
            border: 1px solid #42c7ff; /* Cor da borda dos campos de entrada */
        }

        .form-control:focus {
            border-color: #ffa600; /* Cor da borda ao focar */
            box-shadow: 0 0 5px rgba(66, 199, 255, 0.5); /* Sombra ao focar */
        }
    </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="text-center">Excluir Usuário</h1>
      <form action="" method="post">
        <div class="form-group mt-2">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group mt-2">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" class="form-control">
        </div>
        <button type="submit" name="excluir" class="btn btn-danger mt-3">Excluir</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>