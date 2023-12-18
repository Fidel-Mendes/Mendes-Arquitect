const tel = document.querySelector('#cll');

tel.addEventListener('keypress', () =>{
    let inputlength = tel.value.length;

    if(inputlength === 0){
        tel.value += "(";
    }else if(inputlength === 3){
        tel.value += ") ";
    }else if(inputlength === 10){
        tel.value += "-";
    }
})