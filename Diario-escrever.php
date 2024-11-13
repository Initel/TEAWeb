<?php
include_once("connect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova anotação</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b3e0f7; /* Azul suave */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffb3d1; /* Rosa claro */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .diary {
            width: 100%;
            height: 150px;
            border: 2px solid #66b3ff; /* Azul intenso */
            border-radius: 5px;
            padding: 10px;
            resize: none;
        }
        .btn-custom {
            background-color: #ff8c00; /* Laranja escuro */
            color: white;
        }
        .btn-custom:hover {
            background-color: #b3ff57; /* Verde claro */
            color: black;
        }
        label {
            font-weight: bold;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px; /* Espaço abaixo do título */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Escrever no meu diário</h2> <!-- Título adicionado -->
        <form method="post" action="?page=diario">
            <div class="form-group">
                <label for="emocao">Como foi seu dia hoje? </label>
                <select id="emocao" name="emocao" class="form-control">
                    <option value="feliz">😃 Feliz</option>
                    <option value="neutro">😶 Neutro</option>
                    <option value="triste">🙁 Triste</option>
                    <option value="bravo">😠 Bravo</option>
                    <option value="doente">🤒 Doente</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="diary" id="descricao" name="descricao" placeholder="Escreva aqui sua anotação..."></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Enviar</button>
            <div class="mt-3">
                <a class="btn btn-success" href="?page=home">Voltar</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>