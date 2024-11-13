<?php

include_once("./connect.php");

//função para cadastrar usuário
 function cadastrar($nome,$nome_R,$nv_S, $tipo_A, $idade, $email, $senha,) {
     global $conn;

     $sql = "SELECT * FROM usuarios WHERE email = '$email'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         ?>
         <div class="alert alert-danger" role="alert">
             Erro: E-mail já cadastrado!
         </div>
         <?php
     } else {
         $sql = "INSERT INTO usuarios (nome, email, senha, responsavel, nivel, tipo_acompanhamento, idade) VALUES ('$nome', '$email', '$senha', '$nome_R', '$nv_S', '$tipo_A', '$idade')"; 
         if ($conn->query($sql) === TRUE) {
             echo "Usuário cadastrado com sucesso!";
             header("Location: index.php");
         } else {
             echo "Erro ao cadastrar usuário: " . $conn->error;
         }
     }
 }

// Função para excluir usuário
function excluir($email, $senha) {
    global $conn;
    $sql = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_usuario = $row["id"];
        if ($id_usuario == 1) {
            echo "Não é permitido excluir o usuário administrador!";
        } else {
            $sql = "DELETE FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            if ($conn->query($sql) === TRUE) {
                ?>
                <div class="alert alert-success" role="alert">
                    Usuário excluído com sucesso!
                </div>
                <?php
            } else {
                echo "Erro ao excluir usuário: " . $conn->error;
            }
        }
    } else {
        echo "Usuário não encontrado!";
    }
}

// Função para atualizar usuário
function atualizar($nome_R, $tipo_A, $idade, $email_atual, $senha_atual, $nome, $email, $senha) {
    global $conn;
    $sql = "SELECT id FROM usuarios WHERE email = '$email_atual' AND senha = '$senha_atual'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_usuario = $row["id"];
        if ($id_usuario == 1) {
            echo "Não é permitido atualizar o usuário administrador!";
        } else {
            $sql = "UPDATE usuarios SET responsavel = '$nome_R', tipo_acompanhamento = '$tipo_A', idade = '$idade' nome = '$nome', email = '$email', senha = '$senha' WHERE email = '$email_atual' AND senha = '$senha_atual'";
            if ($conn->query($sql) === TRUE) {
                echo "Usuário atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar usuário: " . $conn->error;
            }
        }
    } else {
        echo "Usuário não encontrado!";
    }
}

function ler() {
    global $conn;
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <div class="container mt-5">
            <h2 class="text-center mb-4" style="color: #42c7ff;">Usuários</h2>
            <table class="table table-bordered table-hover">
                <thead class="table-light" style="background-color: #a2dff7;">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo str_repeat('*', strlen($row["senha"])); ?></td> <!-- Oculta a senha -->
                            <td>
                                <form action="" method="post" class="d-inline">
                                    <input type="hidden" name="email" value="<?php echo $row["email"]; ?>">
                                    <input type="hidden" name="senha" value="<?php echo $row["senha"]; ?>">
                                    <button type="submit" name="excluir" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <style>
            /* Estilos adicionais */
            body {
                background-color: #f0f8ff; /* Cor de fundo suave */
            }
            .table-hover tbody tr:hover {
                background-color: #ffa600; /* Cor de fundo ao passar o mouse */
                color: white; /* Cor do texto ao passar o mouse */
            }
            .btn-danger {
                background-color: #ff82ae; /* Cor do botão de excluir */
                border-color: #ff82ae; /* Borda do botão */
                transition: background-color 0.3s ease, border-color 0.3s ease; /* Transição suave */
            }
            .btn-danger:hover {
                background-color: #ff6f9e; /* Cor do botão ao passar o mouse */
                border-color: #ff6f9e; /* Borda do botão ao passar o mouse */
            }
            h2 {
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Sombra no título */
            }
            .table {
                border-radius: 0.5rem; /* Bordas arredondadas da tabela */
                overflow: hidden; /* Para arredondar as bordas da tabela */
            }
            .table th, .table td {
                vertical-align: middle; /* Centraliza verticalmente o conteúdo */
            }
            .alert {
                background-color: #ffcccb; /* Cor de fundo para alertas */
                color: #a94442; /* Cor do texto para alertas */
            }
        </style>
        <?php
    } else {
        echo "<div class='alert alert-warning text-center'>Nenhum usuário encontrado!</div>";
    }
}

// Formulário para cadastrar usuário
if (isset($_POST["cadastrar"])) {
    $nome = $_POST['nome'];

    $nome_R = $_POST['responsavel'];
    $nv_S = $_POST['nivel'];
    $tipo_A = $_POST['tipo_acompanhamento'];
    $idade = $_POST['idade'];

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    cadastrar($nome,$nome_R,$nv_S, $tipo_A, $idade, $email, $senha);
}

// Formulário para excluir usuário
if (isset($_POST["excluir"])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    excluir($email, $senha);
}

// Formulário para atualizar usuário
if (isset($_POST["atualizar"])) {
    $email_atual = $_POST["email_atual"];
    $senha_atual = $_POST["senha_atual"];

    $nome_R = $_POST['responsavel'];
    $tipo_A = $_POST['tipo_acompanhamento'];
    $idade = $_POST['idade'];

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    atualizar($nome_R, $tipo_A, $idade, $email_atual, $senha_atual, $nome, $email, $senha);
}
?>