import './bootstrap';
import '~boots/js/bootstrap.bundle.min.js';
import FormController from './checkForm';

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
const btnFecharFlash = document.getElementById('fechar');
if(btnFecharFlash){
    btnFecharFlash.addEventListener('click', function () {
        document.getElementById('mensagem-flash').style = "display: none";
    });
}


//CARREGA AS VALIDAÇÕES DE FORMULARIO

window.onload = () => {
    console.log(document.querySelector('.form-wrap'));
    const form = document.querySelector('.form-wrap');
    if(form){
        const form_controller = new FormController(document.querySelector('.form-wrap'), 'form-validate');
    }
    

    const comment_forms = document.querySelectorAll('.comments-form');
    comment_forms.forEach((element) => {
        console.log(element);
        element.addEventListener('submit', (event) => {
            event.preventDefault();
            alert("Obs: Para comentar é necessário estar logado em uma conta Bentricode!\n A função comentários ainda não está disponível!");
        })
    })
}