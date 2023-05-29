var btn = document.getElementById('btn');
var nome = document.getElementById('nome');
var senha = document.getElementById('senha');
var confsenha = document.getElementById('confsenha');
var display = document.getElementById('display');
const email = document.getElementById("email");
btn.style.display="none";

function validarEmail(){
    if (email.value.match(/[^\s@]+@[^\s@]+\.[^\s@]+/gi)) {
        display.innerHTML = "";
        email.style.border="none";
        if(senha.value===confsenha.value && senha.value!==""){
            btn.style.display="block"; 
            senha.style.border="none"
            confsenha.style.border="none";
        }
    }
    else{
        email.style.border="1px solid red";
        display.innerHTML = "Email inválido!";
        btn.style.display="none";
    }   

}
function validarSenha(){
    if(senha.value===confsenha.value && senha.value!==""){
        display.innerHTML = "";
        senha.style.border="none"
        confsenha.style.border="none";
        if (email.value.match(/[^\s@]+@[^\s@]+\.[^\s@]+/gi)) {
            btn.style.display="block";
            email.style.border="none";    
        }
        else{
            display.innerHTML = "Email inválido";
            email.style.border="1px solid red"

        }
    }
    else{
        display.innerHTML = "As senhas não conferem!";
        btn.style.display="none";
        senha.style.border="1px solid red"
        confsenha.style.border="1px solid red";

    }
}


