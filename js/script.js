function addValue(x){
    document.getElementById('mohasebe').value += x;
}

function natije(){
    valuemohasebe = document.getElementById('mohasebe').value;
    natije = eval(valuemohasebe);
    document.getElementById('mohasebe').value = natije;
}
function checkPassword(){
    var password = document.getElementById('password').value;
    var retype = document.getElementById('retypepassword').value;
    let div = document.getElementById('error')

    if(password == retype){
        div.innerText = 'OK'
        div.style.color = 'green'
    }else{
        div.innerText = 'error'
        div.style.color = 'red'
    }
}
function checkPattern(){
    var password = document.getElementById('password').value;
    var retype = document.getElementById('retypepassword').value;

    let pattern = /^[a-z A-Z]{1,2}[0-9]{1,4}$/;

    if(pattern.test(password)){
        alert('ok')
    }else{
        alert('errooor')
    }
}