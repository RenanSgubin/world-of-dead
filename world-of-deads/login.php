<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World of Deads</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/92f64e9681.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../include/header.php' ?>  
    <div class="container">
        <img src="../img/wallpapersden.com_dying-light-vs-zombies_1920x1080.jpg" class="login-wallpaper">
        <div class="content" data-aos="fade-up">
            <div class="titles-content">
                <span class="title">Seja bem vindo, Soldado</span>
            </div>
            <form action="#">

                <span class="input-flex">
                    Email
                    <input type="text" name="user-login">
                </span><br><br>

                <span class="input-flex" id="input-flex-2">
                    Senha
                    <input type="password" name="user-psw-login">
                </span>

                <div class="remember-user-forgot-psw">
                    <span class="remember-user">
                        <input type="checkbox">Lembrar Conta
                    </span>
                    <a class="forgot-psw" href="#">Esqueceu sua senha?</a>
                </div>
                
                <button type="submit">Entrar</button>
                <span class="to-login">Não possui uma conta? <a href="jogar-agora.php">&nbsp;Registrar-se</a></span>

            </form>
        </div>
    </div>

    <div class="footer">
        <span>World of the Deads<br></span>
        <span>Todos os direitos reservados<br></span>
        <span><hr>© xWeb Tibia v3.5 - Developed by: Renan Sgubin</span>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>