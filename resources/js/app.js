import './bootstrap';
import '~boots/js/bootstrap.bundle.min.js';

const inputPesquisa = document.querySelector('.input-pesquisa');
const btnPesquisa = document.querySelector('.btn-pesquisa');

btnPesquisa.addEventListener('click', function () {
    //Tentando impedir o envio de campo vazio no frontend
    //Ja nao faz no backend tambem
    if(!inputPesquisa.value) return;
    return inputPesquisa.value;
});

document.querySelector('.form-pesquisar').addEventListener('submit', function (event) {
    event.preventDefault(); //Impede a action padrao do form

    if(!inputPesquisa.value || inputPesquisa.value === " "){
        window.alert("Digite alguma coisa para pesquisar!");
        return null;
    }
    this.submit();
});

//Fecha mensagem flash apos exibida
document.getElementById('fechar').addEventListener('click', function () {
    document.getElementById('mensagem-flash').style = "display: none";
})

//TODO botao avisar remover antes