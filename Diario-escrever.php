<?php
include_once("connect.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova anotação</title>

    <link href="style.css" rel="stylesheet">
    <style>
        body {
            background-color: #a2dff7;
        }
    </style>

</head>
<body>
    <form method="post" action="?page=diario">
        <label for="emocao">Como foi seu dia hoje? </label>
        <select id="emocao" name="emocao">
            <option value="feliz" >😃</option>
            <option value="neutro">😶</option>
            <option value="triste">🙁</option>
            <option value="bravo" >😠</option>
            <option value="doente">🤒</option>
          </select><br>
        <textarea class="diary" id="descricao" name="descricao"></textarea><br><br>

        <button type="submit">Enviar</button>

        <div class="col-auto">
                <a class="btn btn-success" href="?page=home">Voltar</a>
            </div>            
    </form>
</body>
</html>