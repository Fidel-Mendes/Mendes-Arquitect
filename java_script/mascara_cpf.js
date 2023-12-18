const cpf = document.querySelector('#cpf');

cpf.addEventListener('keypress', () =>{
    let inputlength = cpf.value.length;

    if(inputlength === 3 || inputlength === 7){
        cpf.value += ".";
    }else if(inputlength === 11){
        cpf.value += "-";
    }
})