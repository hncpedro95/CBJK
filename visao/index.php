<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>
    </head>
    <body>
    <center>
        <h2> BEM VINDO: 
            <?php
            session_start();
            echo $_SESSION["nome_usuario"];
            ?>
        </h2>
    </center>
</body>
</html>
