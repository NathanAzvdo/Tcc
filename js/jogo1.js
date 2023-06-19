cont=0;
function disableAll(opt1, opt2, opt3, opt4){
    opt1.disabled=true;
    opt2.disabled=true;
    opt3.disabled=true;
    opt4.disabled=true;
    opt1.style.opacity="0.4"
    opt2.style.opacity="0.4"
    opt3.style.opacity="0.4"
    opt4.style.opacity="0.4"
}
function certa(certa, errada1, errada2, errada3){
    const certa1 = document.getElementById(certa);
    const button1 = document.getElementById(errada1);
    const button2 = document.getElementById(errada2);
    const button3 = document.getElementById(errada3);
    certa1.style.backgroundColor="green";
    disableAll(certa1, button1, button2, button3);
    cont++;
    console.log(cont);
}

function errada(btn1, btn2, btn3, btn4){
    const button1 = document.getElementById(btn1);
    const button2 = document.getElementById(btn2);
    const button3 = document.getElementById(btn3);
    const button4 = document.getElementById(btn4); 
    disableAll(button1, button2, button3, button4);
}