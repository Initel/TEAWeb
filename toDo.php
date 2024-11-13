<?php
// session_start();
/*if (!isset($_SESSION['id'])) {
    header("Location: index.php"); // Redireciona para a página de login
    exit();
}*/

// Inclua o arquivo de conexão com o banco de dados
include_once("./connect.php");

// Função para cadastrar tarefa
function cadastrarTarefa($usuario_id, $descricao) {
    global $conn;
    $sql = "INSERT INTO tarefas (usuario_id, descricao, status, data_criacao) VALUES ('$usuario_id', '$descricao', 'pendente', NOW())";
    $conn->query($sql);
}

// Função para listar tarefas
function listarTarefas($usuario_id) {
    global $conn;
    $sql = "SELECT * FROM tarefas WHERE usuario_id = '$usuario_id'";
    return $conn->query($sql);
}

// Função para concluir tarefa
function concluirTarefa($tarefa_id) {
    global $conn;
    $sql = "UPDATE tarefas SET status = 'concluída' WHERE id = '$tarefa_id'";
    $conn->query($sql);
}

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['descricao'])) {
        $descricao = $_POST['descricao'];
        cadastrarTarefa($_SESSION['id'], $descricao);
    }
    if (isset($_POST['tarefa_id'])) {
        concluirTarefa($_POST['tarefa_id']);
    }
}

// Obtém as tarefas do usuário logado
$tarefas = listarTarefas($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-card {
            max-width: 400px; /* Ajuste a largura máxima do card */
            margin: auto; /* Centraliza o card na página */
        }
        .btn-concluida {
            background-color: #d3d3d3; /* Cor cinza para o botão concluído */
            color: #000; /* Cor do texto do botão */
        }
        .scrollable-list {
            max-height: 200px; /* Altura máxima da lista */
            overflow-y: auto; /* Adiciona rolagem vertical */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card custom-card">
        <div class="card-header">
            <h4>Lista de Tarefas</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="descricao">Nova Tarefa</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" required>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar Tarefa</button>
            </form>

            <hr>

            <h5>Tarefas:</h5>
            <div class="scrollable-list">
                <ul class="list-group">
                    <?php while ($tarefa = $tarefas->fetch_assoc()): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $tarefa['descricao']; ?>
                            <form method="POST" action="" style="margin: 0;">
                                <input type="hidden" name="tarefa_id" value="<?php echo $tarefa['id']; ?>">
                                <?php if ($tarefa['status'] != 'concluída'): ?>
                                    <button type="submit" class="btn btn-success btn-sm" name="concluir">Concluir</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-concluida btn-sm" disabled>Concluída</button>
                                <?php endif; ?>
                            </form>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>