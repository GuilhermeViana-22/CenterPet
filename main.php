<?php


?>

<main>
<div class="container">
        <section class="bannerDesktop">
            <div class="bannerDesktop">
                <video autoplay muted loop class="banner">
                <source src="video/dog1.mp4" type="video/mp4">
            </video>
            </div>
        </section>
        <!-- ========================SESSÃO PESQUISAR========================= -->
        <section>
            <div id="firstText">
                <h1>Aqui você encontra de forma fácil e ágil Clinicas e Ongs Próximas a você !<br> <small>Procure na nossa plataforma e não perca mais tempo fazendo muitas pesquisas na internet</small></h1>

            </div>
            <form action="form.php" method="get">
            <input  id="pesquisar" type="data" placeholder="pesquise por Ongs | Pet Shops | Clinicas Veterinárias">
            <button id="btnPesquisar" type="submit">Pesquisar</button>
             </form>
      
        </section>
        <!-- ========================END SESSÃO PESQUISAR========================= -->
    </div>
    <!-- ==========================cards======================================= -->
    <article class="cards">
        <section class="flex">
            <div>
                <i class="fas fa-user-shield"></i>
                <p id="p_father">Gerenciamento de projetos</p>
                <p id="p_child">Você se cadastra de maneira rápida, sem burocracias e seu negócio já começa a receber mais visualizações na internet</p>
            </div>
            <div>
                <i class="fas fa-rocket"></i>
                <p id="p_father">Buscas Rápidas</p>
                <p id="p_child">Em poucos segundos tenha nas mãos as informações que precisa para escolher o melhor lugar para levar o seu amuiguinho</p>
            </div>
            <div>
                <i class="fas fa-map"></i>
                <p id="p_father">Múltiplas Buscas</p>
                <p id="p_child">Sempre que precisar de um lugar novo , basta acessar a CenterPet que iremos trazer os melhore resultados para você , seja por pet shops , clinicas veterinárias , ou ongs de doação</p>
            </div>
            </div>

        </section>
    </article>
    <!-- ==========================end cards======================================= -->

    <fieldset>
        <legend>Quem Pode participar da nossa plataforma ?</legend>
        <ul class="list">
            <li><i id="iconcheck" class="far fa-check-circle"></i> Ongs</li>
            <li><i id="iconcheck" class="far fa-check-circle"></i> Clinicas Veterinárias</li>
            <li><i id="iconcheck" class="far fa-check-circle"></i> Pet SHops</li>
            <li><i id="iconcheck" class="far fa-check-circle"></i> Ongs de Animais Silvestres</li>
        </ul>
    </fieldset>


    <!-- =====================================planos ================================ -->

    <section class="valores">
        <div class="flex-container">
            <div class="card">
                <h2>Plano Básico<br><small>Plano individual</small></h2>

                <p> Marketing do estabelecimento nas redes sociais</p>
                <hr>
                <p>Acesso ao platraforma de gerenciamento</p>
                <hr>
                <p>Divulgação nas redes sociais do estabelecimento</p>
                <button id="btnSelecionar">Assinar</button>
            </div>
            <div class="card">
                <h2>Plano Básico<br><small>Plano individual</small></h2>

                <p> Marketing do estabelecimento nas redes sociais</p>
                <hr>
                <p>Acesso ao platraforma de gerenciamento</p>
                <hr>
                <p>Divulgação nas redes sociais do estabelecimento</p>
                <button id="btnSelecionar">Assinar</button>
            </div>
            <div class="card">
                <h2>Plano Básico<br><small>Plano individual</small></h2>

                <p> Marketing do estabelecimento nas redes sociais</p>
                <hr>
                <p>Acesso ao platraforma de gerenciamento</p>
                <hr>
                <p>Divulgação nas redes sociais do estabelecimento</p>
                <button id="btnSelecionar">Assinar</button>
            </div>

        </div>
    </section>
    <fieldset>
        <legend>Sobre Nós</legend>
        <ul class="list">
            <li> A <strong style="color: orange;">Espaço Pets </strong>nasceu com o intuito de facilitar a busca por serviços que seu pet precisa, uma relação ágil entre clientes e estabelecimento dando mais visibilidade criando uma maior visibilidade. Sabemos
                o quão complicado é achar um lugar de confiança, onde seu animalzinho vai ser tratado da melhor forma possível, ou aquele lugar mais próximo e com um valor de serviço bacana.<br><br> <strong>Através de filtro de localização,</strong> essa
                busca ficara mais prática, e todos os estabelecimentos deverão ser avaliados pelos seus clientes, assim, criando cada vez mais confiança e aumentando cada vez mais o número de participantes dessa comunidade.</li>
        </ul>
    </fieldset>
</main>