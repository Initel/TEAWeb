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
            background-color: #a2dff7;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center"> O que é musicoterapia</h2>
    <div class="text-center">
        <video width="640" height="360" controls class="mt-3">
            <source src="./video//OQueEMusicoterapia_.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.        
        </video>
        <p><a href="https://www.youtube.com/watch?v=O2YLG-85jCU">Original</a>
    </div>

    <div class="text-center mt-4">
        <h3>Playlists</h3>

        <form method="POST">
            <input type='submit' name="playlist" id='pl1' value="Playlist 1" class="btn btn-primary m-2">
            <input type='submit' name="playlist" id='pl2' value="Playlist 2" class="btn btn-primary m-2">
            <input type='submit' name="playlist" id='pl3' value="Playlist 3" class="btn btn-primary m-2">
            <input type='submit' name="playlist" id='pl4' value="Playlist 4" class="btn btn-primary m-2">
            <input type='submit' name="playlist" id='pl5' value="Playlist 5" class="btn btn-primary m-2">
            <br><label>Coloque seu telefone: </label>
            <input type="tel" class="tel" id="tel" name="tel">
            <?php

                $listaUrl = [
                    "Playlist 1" => "https%3A%2F%2Fwww.youtube.com%2Fplaylist%3Flist%3DPLSSJXDNLIOI5x5pFVyOUfr6Ye8uR0R_Df", //https://www.youtube.com/playlist?list=PLSSJXDNLIOI5x5pFVyOUfr6Ye8uR0R_Df
                    "Playlist 2" => "https%3A%2F%2Fwww.youtube.com%2Fplaylist%3Flist%3DPLhRt6HRjXycfigzbHCScp8x8t_q4l16Ol", //https://www.youtube.com/playlist?list=PLhRt6HRjXycfigzbHCScp8x8t_q4l16Ol
                    "Playlist 3" => "https%3A%2F%2Fwww.youtube.com%2Fplaylist%3Flist%3DPL3opm2WogRKX9jVKuJ-Dr_eXceRL2eN5y", //https://www.youtube.com/playlist?list=PL3opm2WogRKX9jVKuJ-Dr_eXceRL2eN5y
                    "Playlist 4" => "https%3A%2F%2Fwww.youtube.com%2Fplaylist%3Flist%3DPL23SZ7pO1D6qUqjKf-txQjbL3u8ybvkep", //https://www.youtube.com/playlist?list=PL23SZ7pO1D6qUqjKf-txQjbL3u8ybvkep
                    "Playlist 5" => "https%3A%2F%2Fwww.youtube.com%2Fplaylist%3Flist%3DPLlhXVtTUz1qjuPiYNvQ9U22RgRxFPqkS-", //https://www.youtube.com/playlist?list=PLlhXVtTUz1qjuPiYNvQ9U22RgRxFPqkS-
                ];

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['tel'])) {
                        $Url = "https://wa.me/" . $_POST['tel'] . "?text=" . $listaUrl[$_POST['playlist']];
                        header("Location: ". $Url);
                    }
                }
            ?>
        </form>
    </div>
</div>





</div>

<!-- Link para o JS do Bootstrap e jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>