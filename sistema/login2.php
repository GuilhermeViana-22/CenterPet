<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/Stylelogin2.css">


    <script src="https://kit.fontawesome.com/55136953e0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="conteiner">
        <div class="content first-content">
            <div class="first-colum">
                <h2 class="tittle tittle-Primary">Bem vindo!</h2>
                <p class="description description-primary"> Mantenha-se conectado conosco </p>
                <p class="description description-primary"> Para logar click no botao abaixo</p>
                <button id="singin" class="btn btn-primary">Login</button>

            </div>
            <div class="second-colum">
                <h2 class="tittle tittle-second">Criar Conta</h2>
                <div class="social-media">
                    <ul class="list-social-midia">
                        <a href="#" class="link-social-media">
                            <li class="item-social-midia"><i class="fab fa-facebook-f"></i></li>
                        </a>
                        <a href="#" class="link-social-media">
                            <li class="item-social-midia"><i class="fab fa-google"></i></li>
                        </a>
                        <a href="#" class="link-social-media">
                            <li class="item-social-midia"><i class="fab fa-linkedin-in"></i></li>
                        </a>
                    </ul>
                </div>
                <!-- fim Social media-->
                <p class="description description-second"> Ou use seu email e senha </p>
                <form action="cadastro_login.php" class="form">
                    <label class="label-input"><i class="fas fa-user-alt icon-modify"></i></i> <input type="text" name="nomec" placeholder="Nome" required></label>

                    <label class="label-input"><i class="fas fa-store-alt icon-modify"></i> <input type="text" name="cnpjc" placeholder="CNPJ" required></label>

                    <label class="label-input"><i class="far fa-envelope icon-modify"></i><input type="email" name="emailc" id="" placeholder="Digite o email de cadastro" required></label>

                    <label class="label-input"><i class="fas fa-lock icon-modify"></i><input type="password" name="senhac" id="" placeholder="Digite um senha" required></label>
                    <?php if (isset($_GET["erroc"]) && $_GET["erroc"] == 1) { ?>

                        <div class="error" role="alert">
                            Algo deu errado , Verifique seus os dados esatao corretos
                        </div>

                    <?php } else if (isset($_GET["erroc"]) && $_GET["erroc"] == 2) { ?>

                        <div class="alerta" role="alert">
                            E-mail da cadastrado no sistema , faca o login
                        </div>
                    <?php } else if (isset($_GET["sucessoc"]) && $_GET["sucessoc"] == 1) { ?>

                        <div class="sucesso" role="alert">
                            Cadastrado com Sucesso!
                        </div>
                    <?php } ?>

                    <button class="btn btn-second">Criar</button>
                </form>
            </div>
        </div>
        <!-- second-content-->
        <div class="content second-content">

            <div class="first-colum">
                <h2 class="tittle tittle-Primary">Cadastre-se</h2>
                <p class="description description-primary"> Nao perca a chance de ter sucesso no seu trabalho </p>
                <p class="description description-primary"> Divulgue seu estabelecimento </p>
                <button id="singup" class="btn btn-primary">Registrar</button>

            </div>
            <div class="second-colum">
                <h2 class="tittle tittle-second">Entrar</h2>
                <div class="social-media">
                    <ul class="list-social-midia">
                        <a href="#" class="link-social-media">
                            <li class="item-social-midia"><i class="fab fa-facebook-f"></i></li>
                        </a>
                        <a href="#" class="link-social-media">
                            <li class="item-social-midia"><i class="fab fa-google"></i></li>
                        </a>
                        <a href="#" class="link-social-media">
                            <li class="item-social-midia"><i class="fab fa-linkedin-in"></i></li>
                        </a>
                    </ul>
                </div>
                <!-- fim Social media-->
                <p class="description description-second">Ou use seu email e senha</p>
                <form action="logar.php" method="post" class="form">

                    <label class="label-input"><i class="far fa-envelope icon-modify"></i><input type="email" name="email" id="" placeholder="email" required></label>

                    <label class="label-input"><i class="fas fa-lock icon-modify"></i><input type="password" name="senha" id="" placeholder="senha" required></label>
                    <?php if (isset($_GET["erro"]) && $_GET["erro"] == 1) { ?>

                        <div class="error" role="alert">
                            Erro ao Fazer o Login
                        </div>

                    <?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 2) { ?>

                        <div class="alerta" role="alert">
                            Voce nao esta logado!
                        </div>
                    <?php } ?>
                    <a class="password" href="#">Esqueci a senha?</a>
                    <button class="btn btn-second">Logar</button>
                </form>

            </div>
        </div>
    </div>
    <script src="js/app.js"></script>

    <script src="js/jquery.mask.js"></script>

    <script>
        jQuery(document).ready(function() {
            $('.nomec').mask('A', {
                translation: {
                    A: {
                        pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g,
                        recursive: true
                    },
                },
            });
           
            $('.cnpjc').mask('00.000.000/0000-00', {
                reverse: true
            });
           

        })
    </script>



</body>

</html>