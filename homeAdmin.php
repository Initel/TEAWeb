<?php
session_start();

if (!isset($_SESSION["id"])) {
  header("Location: loginout.php");
  exit;
}

if ($_SESSION["id"] != 1) {
  header("Location: home.php");
  exit;
}

if (isset($_REQUEST["logout"]) && $_REQUEST["logout"] == true) {
  sleep(2);
  session_destroy();
  header("Location: index.php");
  exit;
}

?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
      .navbar-custom {
        background-color: #BFEFFD;
      }
      .navbar-custom .nav-link {
        color: #617680;
      }
      .navbar-custom .nav-link:hover {
        color: black;
      }
      .navbar-custom .navbar-brand {
        color: #ffa600;
      }
      .navbar-custom .navbar-brand:hover {
        color: #a2ed57; 
      }
      .dropdown-menu {
        background-color: #a2dff7; 
      }
      .dropdown-item {
        color: #ff82ae;
      }
      .dropdown-item:hover {
        background-color: #42c7ff;
        color: #ffffff;
      }

    </style>
  </head>
    
  <body>
  <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="./video/autially.jpg" alt="Logo" style="height: 50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: #617680;" aria-current="page" href="./homeAdmin.php">Home</a>
        </li>            
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="?page=novo">Criar usuario</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=atualizar">Atualizar infos</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=excluir">deletar usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item"><a class="nav-link" href="?page=ler">listar usuarios</a></li>
          </ul>
        </li>
    
      <li class="nav-item">
        <a class="nav-link" href="?logout=true">Sair</a>
      </li>
    </ul>
  </div>
</div>
</nav>
  
<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    $home = "./mesc.php";
    switch(@$_REQUEST["page"]){
      case "novo": include_once("./CRUD/P_create.php"); break;
      case "excluir": include_once("./CRUD/P_delete.php"); break;
      case "atualizar": include_once("./CRUD/P_update.php");break;
      case "ler": include_once("./CRUD/P_read.php"); break;      
      case "home": include_once($home); break;    
      case "diario": include_once("./Diario.php");break;        
      case "escrever_diario": include_once("./Diario-escrever.php");break;  
      case "tarefas": include_once("./toDo.php");break; 
      case "mterapia": include_once("./mterapia.php");break;      
      case "atividades": include_once("./atividades.php");break; 
      default: include_once($home); break;
    }
  ?>
    </div>
  </div>
</div>

    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>