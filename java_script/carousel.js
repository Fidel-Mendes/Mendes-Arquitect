let count = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextImg();
}, 4000);

function nextImg(){
    count ++;
    if(count>6){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;

}