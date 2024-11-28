<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player de Vídeo com Bootstrap</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #a2dff7, #ff82ae);
            font-family: Arial, sans-serif;
            margin-bottom: 100px;
        }
        h2 {
            color: #42c7ff;
            margin-bottom: 30px;
        }
        button {
            background-color: #ffa600;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #ff82ae;
        }
        .container {
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            height: 550px; /* altura fixa */
            overflow-y: auto; /* barra de rolagem vertical */
        }
        video {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        p {
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container mt-5" id="ativ" style="display: block">
    <h2 class="text-center"> Atividades </h2>
    
    <div class="text-center mb-4">
        <button onclick="atividade()"> Atividades </button>
        <button onclick="exercicio()"> Exercícios </button>
    </div>
    
    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/atividades/tabua_das_texturas.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Tábua das texturas</p>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/atividades/Garrafa_magica.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Garrafa mágica</p>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/atividades/Passa_cordao.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Passa cordão</p>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/atividades/Passa_bolinha.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Passa bolinha</p>
    </div>
</div>

<div class="container mt-5" id="exer" style="display: none">
    <h2 class ="text-center"> Exercícios </h2>

    <div class="text-center mb-4">
        <button onclick="atividade()"> Atividades </button>
        <button onclick="exercicio()"> Exercícios </button>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/exercicios/foca.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Exercício da foca</p>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/exercicios/borboleta.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Exercício da borboleta</p>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/exercicios/cobra.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Exercício da cobra</p>
    </div>

    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video/exercicios/circuitos.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p>Circuito</p>
    </div>
</div>

<script>
    var exe = document.getElementById("exer");
    var atv = document.getElementById("ativ");

    function atividade(){
        atv.style.display = "block"
        exe.style.display = "none"
    }

    function exercicio(){
        exe.style.display = "block"
        atv.style.display = "none"
    }
</script>

<!-- Link para o JS do Bootstrap e jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>