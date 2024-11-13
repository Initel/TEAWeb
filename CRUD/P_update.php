<?php
include_once("./Crud.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #a2dff7; 
            font-family: Arial, sans-serif; 
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            font-size: 2.5rem;
            color: #2a9fd6; 
        }

        .form-container {
            max-height: 70vh; 
            overflow-y: auto; 
            padding: 20px; 
            border: 1px solid #ffa600; 
            border-radius: 5px; 
            background-color: white; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px; 
        }

        .form-control {
            border: 2px solid #42c7ff;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #ff82ae; 
            box-shadow: 0 0 5px rgba(66, 199, 255, 0.5); 
        }

        .btn {
            transition: background-color 0.3s, transform 0.2s;
            background-color: #ffa600;
            border: none; 
        }

        .btn:hover {
            background-color: #ff82ae;
            transform: scale(1.05); 
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">    
            <h1 class="text-center mb-4">Atualizar Usuário</h1>
            <div class="form-container">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email_atual" class="mt-2">Email atual:</label>
                        <input type="email" id="email_atual" name="email_atual" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="senha_atual" class="mt-2">Senha atual:</label>
                        <input type="password" id="senha_atual" name="senha_atual" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="mt-2">Novo nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="responsavel" class="mt-2">Novo nome do responsável:</label>
                        <input type="text" id="responsavel" name="responsavel" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="tipo_acompanhamento" class="mt-2">Novo tipo de acompanhamento:</label>
                        <input type="text" id="tipo_acompanhamento" name="tipo_acompanhamento" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="idade" class="mt-2">Nova idade:</label>
                        <input type="text" id="idade" name="idade" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="mt-2">Novo email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="mt-2">Nova senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" required>
                    </div>
                    <button type="submit" name="atualizar" class="btn mt-3">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>