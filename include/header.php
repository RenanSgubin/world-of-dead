<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/header.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92f64e9681.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <!--Header da Página-->
        <div class="header">
            <a class="header-text" href="../world-of-deads/home.php">Inicio</a>
            <span class="header-text" id="dropdown-comunity" onmouseover="dropDown()" onmouseout="closeDropDown()">
                <a>Comunidade</a>
              <span class="menu-dropdown">
                  <a>Rankings</a>
                  <a>Casas</a>
                  <a>Ultimas Mortes</a>
                  <a>Guilds</a>
              </span>
            </span>
            <a class="header-text">World Map</a>
            <a class="header-text">Download</a>
            <div class="content-logo">
                <div class="teste"></div>
                <a href="../world-of-deads"><img src="../img/World-of-deads-logo-3.png" class="logo"></a>
                <div class="teste2"></div>
            </div>
            <a class="header-text">Trailer</a>
            <a class="header-text" href="../world-of-deads/pesquisar-jogador.php">Pesquisar</a>
            <a class="header-text" href="../world-of-deads/termos-de-uso.php">Regras</a>
            <a class="header-text" href="jogar-agora.php">Jogar Agora</a>

            

            <!--<div class="player-search-content">
                <input type="text" class="player-search" name="player-search">
                <div class="icon-width"><img src="../img/search.svg" class="search-player-icon"></div>
            </div>-->  
        </div>
        <!--Fim do Header da Página-->

        <script src="../js/dropDown.js"></script>
</body>
</html>
