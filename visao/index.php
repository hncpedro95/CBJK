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
<!--     <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="../Prototipos/Prototipos/1Tela_inicial.PNG" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../Prototipos/Prototipos/2Cadastro_de_cliente.PNG" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../Prototipos/Prototipos/3Financa_devedor.PNG" alt="Third slide">
    </div>
  </div>
</div>-->
</body>
</html>
