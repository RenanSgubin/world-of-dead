<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World of Deads</title>
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/92f64e9681.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../include/header.php' ?>   
    <div class="container">
       

        <div class="zombie-img-content">
            <img src="../img/wallpaper-2.jpg" class="wallpaper-home">
        </div>

        <div class="content-1">
            <img src="../img/content-1-wallpaper.jpg" class="content-1-wallpaper">
            <span data-aos="fade-up">Sobreviva ao apocalipse Zumbi</span>
            <img src="../img/content-1.jpg" class="game-image-1" data-aos="fade-up">
        </div>

        <div class="content-2">
            <img src="../img/content-2-wallpaper.jpg" class="content-2-wallpaper">
            <span data-aos="fade-up">Lute contra outros Jogadores</span>
            <img src="../img/content-1.jpg" class="game-image-1" data-aos="fade-up">
        </div>

        <div class="content-3">
            <div class="text-download">
                <span>Faça o download agora mesmo!</span><br>
                Baixe o jogo agora mesmo, e venha fazer parte desta aventura.
                Faça novos amigos e traga eles para se divertir junto com você.

                Seja bem vindo ao World Of The Dead.
            </div>
            <div class="links-for-download">
                <span>Links para Download</span><br>            
            </div>
            <div class="downloads">
                <div class="download-type">
                    <img src="../img/download-da-nuvem.png" class="download-icon">
                    Link via <li>MediaFire</li>
                    Client Version v1.1 Beta
                    Atualizado em 02/09/2020 às 00:14:39.
                    <button class="button-download">Download</button>
                </div>
                <div class="download-type">
                    <img src="../img/download-da-nuvem.png" class="download-icon">
                    Link via <li>Mega.Co</li>
                    Client Version v1.1 Beta
                    Atualizado em 02/09/2020 às 00:14:43.
                    <button class="button-download">Download</button>
                </div>
            </div>
        </div>

        <?php require_once("../include/footer.php") ?>  

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

        document.getElementsByClassName("header-text")[0].style.borderBottom = "9px solid rgb(208,208,208)";
        document.getElementsByClassName("header-text")[0].style.color = "rgb(208,208,208)";
        AOS.init();
      </script>
</body>
</html>   