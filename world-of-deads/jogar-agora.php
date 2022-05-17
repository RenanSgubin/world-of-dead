<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World of Deads</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jogar-agora.css">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/92f64e9681.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include '../include/header.php' ?>  
    <div class="container">
        <div class="register-content" data-aos="fade-up">
            <span class="register-title">Registrar-se</span>

            <span class="infos-user">
                <i class="fa-solid fa-lock"></i>
            </span>

            <form action="#" method="post">
                
                <span>
                    Usuário:
                    <input type="text" name="user-user" class="input-data">
                </span>
                
                <span>
                    Email:
                    <input type="text" name="user-email" class="input-data">
                </span>

                <span>
                    Nome:
                    <input type="text" name="user-name" class="input-data">
                </span>
                
                <span>
                    Sobrenome:
                    <input type="text" name="user-lastname" class="input-data">
                </span>

                <span>
                    Senha:
                    <input type="text" name="user-psw" class="input-data">
                </span>
                
                <span>
                    Confirmar Senha
                    <input type="text" name="user-confirmpsw" class="input-data">
                </span>

                <button type="submit">Continuar</button>

                <div class="user-terms-content">
                    <input type="checkbox" class="user-terms">
                    <span>Declaro que li e concordo com os <a href="termos-de-uso.php">&nbsp;Termos de Uso</a></span>
                </div>
            </form>

            <div class="login">
                Já possui uma conta? <a href="login.php">&nbsp;&nbsp;Fazer Login</a>
            </div>

        </div>

    </div>  

    <div class="footer">
        <span>World of the Deads<br></span>
        <span>Todos os direitos reservados<br></span>
        <span><hr>© xWeb Tibia v3.5 - Developed by: Renan Sgubin</span>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.getElementsByClassName("header-text")[7].style.borderBottom = "9px solid rgb(15, 15, 15)";
        document.getElementsByClassName("header-text")[7].style.color = "rgb(208,208,208)";
        AOS.init();
    </script>
</body>
</html>