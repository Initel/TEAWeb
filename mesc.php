<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exemplo de Botões</title>
    <style>
        body {
            background-color: #a2dff7; /* Cor de fundo suave */
        }
        .btn-custom {
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background-color: #42c7ff; /* Azul claro */
            border-color: #42c7ff;
        }
        .btn-secondary {
            background-color: #ff82ae; /* Rosa */
            border-color: #ff82ae;
        }
        .btn-success {
            background-color: #ffa600; /* Laranja */
            border-color: #ffa600;
        }
        .btn-info {
            background-color: #17a2b8; /* Azul escuro */
            border-color: #17a2b8;
        }
        .container {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">        
        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-primary btn-custom" href="?page=diario">Diário</a>
            </div>
            <div class="col-auto">
                <a class="btn btn-secondary btn-custom" href="?page=mterapia">Música Terapia</a>
            </div>
            <div class="col-auto">
                <a class="btn btn-success btn-custom" href="?page=tarefas">Lista de Tarefas</a>
            </div>
            <div class="col-auto">
                <a class="btn btn-info btn-custom" href="?page=atividades">Atividades</a>
            </div>            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>