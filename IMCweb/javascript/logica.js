
function resultado(imc){

    var peso = parseFloat(document.querySelector('#peso').value.replace(',','.'));
    var altura = parseFloat(document.querySelector('#altura').value.replace(',','.'));
    var imc = peso / (altura * altura)

    alert(imc);
}