<?php
session_start();

// Inicializa a lista de tarefas se não existir
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

// Adiciona uma nova tarefa
if (isset($_POST['adicionar'])) {
    $novaTarefa = trim($_POST['tarefa']);
    if (!empty($novaTarefa)) {
        $_SESSION['tarefas'][] = $novaTarefa;
    }
}

// Remove uma tarefa
if (isset($_POST['remover'])) {
    $indice = $_POST['indice'];
    unset($_SESSION['tarefas'][$indice]);
    $_SESSION['tarefas'] = array_values($_SESSION['tarefas']); // Reindexa o array
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Lista de Tarefas</h1>
    <form method="POST" class="mb-3">
        <div class="input-group">
            <input type="text" name="tarefa" class="form-control" placeholder="Digite uma nova tarefa" required>
            <div class="input-group-append">
                <button class="btn btn-primary" name="adicionar" type="submit">Adicionar</button>
            </div>
        </div>
    </form>
    
    <ul class="list-group">
        <?php foreach ($_SESSION['tarefas'] as $indice => $tarefa): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= htmlspecialchars($tarefa) ?>
                <form method="POST" class="mb-0">
                    <input type="hidden" name="indice" value="<?= $indice ?>">
                    <button class="btn btn-danger btn-sm" name="remover" type="submit">Remover</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>