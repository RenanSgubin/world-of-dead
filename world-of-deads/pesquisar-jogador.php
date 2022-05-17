<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World of Deads</title>
    <link rel="stylesheet" href="../css/searchPlayer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/92f64e9681.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../include/header.php' ?>  

    <div class="container-search-players">
       
        <div class="content-search-players">
            <span>Pesquisar Player </span>
            <span class="input-w-button">
                <input type="text" class="search-player-input">
                <button type="submit" class="button-search-players">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </span>
        </div>

    </div>

    <?php require_once("../include/footer.php") ?>  




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.getElementsByClassName("header-text")[5].style.borderBottom = "9px solid rgb(208,208,208)";
        document.getElementsByClassName("header-text")[5].style.color = "rgb(208,208,208)";
        AOS.init();
      </script>
</body>
</html>   