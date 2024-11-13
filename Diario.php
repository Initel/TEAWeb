<?php
// Inclua o arquivo de conexão com o banco de dados
include_once("connect.php");

// Função para cadastrar tarefa
function novaAnotacao($usuario_id, $anotacao, $emocao) {
    global $conn;
    $sql = "INSERT INTO diario (usuario_id, anotacao, data_criacao, emocao) VALUES ('$usuario_id', '$anotacao', NOW(), '$emocao')";
    $conn->query($sql);
}

// Função para listar tarefas de um usuário
function listarAnotacoes($usuario_id) {
    global $conn;
    $sql = "SELECT * FROM diario WHERE usuario_id = '$usuario_id'";
    return $conn->query($sql);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['apagar'])) {
        global $conn;
        $kill = $_POST['apagar'];
        $sql = "DELETE FROM diario WHERE id='$kill'";
        $conn->query($sql);
    } else {
        // nova anotação em diario
        $descricao = $_POST['descricao'];
        $emocao = $_POST['emocao'];
        $usuario_id = 1; // Substitua pelo ID do usuário logado
        novaAnotacao($usuario_id, $descricao, $emocao);
    }
}

$usuario_id = $_SESSION['id'];
$diario = listarAnotacoes($usuario_id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b3e0f7; /* Azul suave */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffb3d1; /* Cor de fundo rosa claro */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .anotacoes-container {
            max-height: 300px; /* Define a altura máxima para a barra de rolagem */
            overflow-y: auto; /* Adiciona a barra de rolagem vertical */
            margin-bottom: 15px; /* Espaço abaixo do container de anotações */
        }
        .anotacao {
            padding: 10px;
            background-color: #ffffff; /* Fundo branco para as anotações */
            border-radius: 5px;
            border: 1px solid #66b3ff; /* Azul intenso */
            margin-bottom: 10px; /* Espaço entre as anotações */
        }
        .btn-custom {
            background-color: #ff8c00; /* Laranja escuro */
            color: white;
        }
        .btn-custom:hover {
            background-color: #b3ff57; /* Verde claro */
            color: black;
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
        <a href="?page=escrever_diario" class="btn mb-2 btn-primary">Novo registro</a>
        <a class="btn mb-2 btn-success" href="?page=home">Voltar</a>
        
        <div class="anotacoes-container">
            <?php if ($diario->num_rows > 0): ?>
                <?php while($nota = $diario->fetch_assoc()): ?>
                    <div class="anotacao">
                        <?php
                            $listaEmote = [
                                "feliz"  => "😃",
                                "neutro" => "😶",
                                "triste" => "🙁",
                                "bravo"  => "😠",
                                "doente" => "🤒",
                            ];
                            $var_emoji = $listaEmote[$nota['emocao']];
                        ?>
                        <span>Dia: <?= htmlspecialchars($nota['data_criacao']) ?> | <?= htmlspecialchars($var_emoji) ?></ span>
                        <div class="nota">
                            <span><?= htmlspecialchars($nota['anotacao']) ?></span>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="apagar" value="<?= $nota['id'] ?>">
                                <button type="submit" class="btn btn-custom">Deletar</button>
                            </form>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Nenhuma anotação encontrada</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>










