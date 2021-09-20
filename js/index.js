document.getElementById("year").innerHTML = new Date().getFullYear();

const btnMObile = document.getElementById('btnMObile');

function toggleMenu() {
    const nav = document.getElementById('nav');
    //toggle adiciona uma atividade caso tenha e remove caso não tenha
    nav.classList.toggle('active')
}
btnMObile.addEventListener("click", toggleMenu);


const textarea = document.addEventListener("click", (text));


function text() {
    const textare = document.getElementById('textarea');
    textare.style = "outline: solid 1px rgb(0, 255, 136);"

}

function entrar() {
    window.location.href = "../sistema/login2.php";
}