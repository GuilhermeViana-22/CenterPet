
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/pesquisar.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Espaço Pets</title>
</head>

<body>

<article>
    <h1>Faça sua busca personalizada</h1>
<input  id="buscar" type="data" placeholder="pesquise por Ongs | Pet Shops | Clinicas Veterinárias">
    <section class="form">
      <div class="checkinput">
            <label>Selecione um filtro de busca :</label>
            <form action="#">
                <p>
                    <label for="test1">Estado</label><br>
                    <select name="cars" id="cars">
                  <option value="volvo">-SELECIONE -</option>
                  <option value="saab"> Banho e Tosa </option>
                  <option value="opel">Clinicas</option>
                  <option value="audi">Ongs para adoção de animais</option>
                </select>

                </p>
                <p>
                <label for="test1">Cidade</label><br>
                    <select name="cars" id="cars">
                  <option value="volvo">-SELECIONE -</option>
                  <option value="saab"> Banho e Tosa </option>
                  <option value="opel">Clinicas</option>
                  <option value="audi">Ongs para adoção de animais</option>
                </select>
                </p>
                <p>
                </p>
        </div>
        
        <div class="selectinput">
                <label for="cars">Selecione o serviço que está buscando :</label>
                <select name="cars" id="cars">
                  <option value="volvo">-SELECIONE -</option>
                  <option value="saab"> Banho e Tosa </option>
                  <option value="opel">Clinicas</option>
                  <option value="audi">Ongs para adoção de animais</option>
                </select>
                <br>
                <div class="box1">

          
            </form>

        </div>
        <br>
        <br>
        <button id="btnPesquisar" type="submit">Pesquisar</button>    
    </section>
</article>
    <Article class="box">
    <h1>Resultados da busca</h1>
        <div class="resultados">
            <img src="./img/estabelecimentos/download.jpeg">
            <p class="descript">Avaliação</p>
            <p class="descript">Endereço</p>
            <p class="descript">Cep</p>
        </div>
        <div class="resultados">
            <img src="./img/estabelecimentos/download.jpeg">
            <p class="descript">Avaliação</p>
            <p class="descript">Endereço</p>
            <p class="descript">Cep</p>
        </div>
        <div class="resultados">
            <img src="./img/estabelecimentos/download.jpeg">
            <p class="descript">Avaliação</p>
            <p class="descript">Endereço</p>
            <p class="descript">Cep</p>
        </div>
    </Article>

</body>
</html>