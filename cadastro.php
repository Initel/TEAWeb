<?php
    include_once("./CRUD/Funcoes/loginout.php");
    include_once("./Crud.php")
?>

<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a2dff7; /* Azul claro */
            font-family: Arial, sans-serif; /* Fonte legível */
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cadastro-form {
            background-color: #f5f5f5; /* Fundo claro para os formulários */
            padding: 30px; /* Aumentando o padding */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 400px; /* Largura um pouco maior */
        }
        .btn-primary {
            background-color: #42c7ff; /* Azul claro */
            border: none;
        }
        .btn-primary:hover {
            background-color: #ffa600; /* Laranja ao passar o mouse */
        }
        .form-group label {
            font-weight: bold; /* Labels em negrito */
        }
    </style>
</head>
<body>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4 cadastro-form" id="cadastro-form">
            <h1 class="text-center">Cadastrar Usuários</h1>
            <form action="" method="post" class="form-horizontal">

                <div class="form-group">
                    <label for="nome" class="col-sm-12 control-label">Nome da criança:</label>
                    <div class="col-sm-12">
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="responsavel" class="col-sm-12 control-label">Nome do Responsável:</label>
                    <div class="col-sm-12">
                        <input type="text" id="responsavel" name="responsavel" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nivel" class="col-sm-12 control-label">Nível de suporte:</label>
                    <div class="col-sm-12">
                        <input type="text" id="nivel" name="nivel" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo_acompanhamento" class="col-sm-12 control-label">Tipo de acompanhamento:</label>
                    <div class="col-sm-12">
                        <input type="text" id="tipo_acompanhamento" name="tipo_acompanhamento" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo_acompanhamento" class="col-sm-12 control-label">Idade:</label>
                    <div class="col-sm-12">
                        <input type="text" id="idade" name="idade" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-12 control-label mt-2">Email:</label>
                    <div class="col-sm-12">
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha" class="col-sm-12 control-label mt-2">Senha:</label>
                    <div class="col-sm-12">
                        <input type="password" id="senha" name="senha" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary mt-4">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>