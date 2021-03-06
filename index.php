<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet_Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-copy">
                        <h1 class="hero-title mt-0">Pesando em um lugar bacana para seu Pet descansar as patinhas ?</h1>
                        <p class="hero-paragraph">Nós da CenterPet estamos com novidades e com certeza que você vai ficar muito feliz em fazer parte da nossa plataforma de divulgação</p>
                        <div class="hero-cta"><a class="button button-primary" data-toggle="modal" data-target="#myModal" href="#">QUERO FAZER PARTE</a>
                            <a class="button" href="#">VISITAR WEBSITE</a></div>
                    </div>


                    <div class="hero-figure anime-element">
                        <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                            <rect width="528" height="396" style="fill:transparent;" />
                        </svg>
                        <img style="margin-top: -70%;" src="./src/images/pulando.png" alt="Logo">
                    </div>
                </div>
            </div>

            </section>

            <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="./src/images/cao.jpg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">Melhores lugares para você levar seu amiguinho</h4>
                                    <p class="text-sm mb-0">Encotre os lugares perto da sua regia e com um otimo atendimento. a onde o seu pet possa ter os melhores cuidados.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="src/images/gato.jpg" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">Gostaria de ter um pet</h4>
                                    <p class="text-sm mb-0"> Econtre Ongs para voce poder adotar um pet que seja a sua cara. </p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="src/images/racao.jpg" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Para empresa</h4>
                                    <p class="text-sm mb-0">Gostaria de cadatra o seu consultorio para ser divulgado ? temos otimos preco para voce divulga o seu consultorio. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </header>
        <!-- STAR THE MODAL SECTI0N --- INICIA A CHAMATIVA DO MODAL DE DISPARO DE EMAIL-->
        <div class="container">
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <input id="meu_input" placeholde="Digite aqui o número do documento">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="salvar()">Salvar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <script>
            function salvar() {

                $.ajax({
                        url: "enderecodomeupost.php",
                        method: "POST",
                        data: {
                            meuinput: document.getElementById("meu_input").value
                        }
                    })
                    .done(function(data) {
                        console.log('success', data)
                    })
                    .fail(function(xhr) {
                        console.log('error', xhr);
                    });

            }

            document.getElementById("meu_input").value = "";
        </script>
        <main>
            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">E como eu vou ser beneficiado com a platafoprma de divulgação</h2>
                            <p class="section-paragraph mb-0">Além da grande visualização que você irá receber seu estabelecimento recebe indicações na região de atação.</p>
                        </div>
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <span class="pricing-table-price-amount h6">Está esperando o que ?</div>
                                        </div>
                                        <div class="pricing-table-features-title text-xs pt-24 pb-24">O que você irá ganhar fazendo parte da bissa plataforma</div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>divulgações do Seu endereco</span>
                                            </li>
                                            <li>
                                                <span>divulgação nas redes sociais</span>
                                            </li>
                                            <li>
                                                <span>Pessoas de outras cidades podendo visitar sua loja</span>
                                            </li>
                                            <li>
                                                <span>seja o preferido de seus clientes</span>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-cta mb-8">
                                            <a data-toggle="modal" data-target="#myModal" class="button button-primary button-shadow button-block" href="#">QUERO FAZER PARTE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="cta section">
                <div class="container">

                    <div class="cta-inner section-inner">
                        <h2>Visite nosso website para achar o melhor lugar para seu animalzinho.<br><br><a class="button button-primary button-wide-mobile" href="#">QUERO CONHECER</a></h2>

                        <div class="cta-cta">

                            <img src="./src/images/footer.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contatos</a>
                        </li>
                        <li>
                            <a href="#">Sobre Nós</a>
                        </li>
                        <li>
                            <a href="#">Suporte</a>
                        </li>
                    </ul>

                    <ul class="footer-social-links list-reset">

                        <li>

                            <a href="#">

                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">
                        <p style="color: #6fbef3;"> &copy; CodeKnight</p>
                        <p style="margin-left: 10px;">All Rights Reserved</p>
                        <div style="margin-left: 10px;">
                            <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script>
                        </div>
                    </div>
                </div>
        </footer>
        </div>

        <script src="dist/js/main.min.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</html>