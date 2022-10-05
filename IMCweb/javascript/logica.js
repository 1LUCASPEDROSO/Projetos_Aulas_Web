
function resultado(){
    var peso = parseFloat(document.querySelector('#peso').value.replace(',','.'));
    var altura = parseFloat(document.querySelector('#altura').value.replace(',','.'));
    var resultadoimc = peso / (altura * altura);
    var imagemresultado = document.createElement("img");

    //como injetar css atráves do js
    imagemresultado.style.cssText="margin-left:42%"
    
    if(resultadoimc < 18.5){
        alert("imc: "+resultadoimc)
        imagemresultado.src="../imagem/homemmagro.jpg";
       document.querySelector("#imagem").appendChild(imagemresultado)
       Limpardados()
    }
    else if(resultadoimc > 18.6 && resultadoimc < 24.9){
        alert("imc: "+resultadoimc)
        imagemresultado.src="../imagem/homempesoideal.jpg";
        document.querySelector("#imagem").appendChild(imagemresultado)
        Limpardados()
    }
    else if(resultadoimc > 25 && resultadoimc < 29.9){
        alert("imc: "+resultadoimc)
        imagemresultado.src="../imagem/homemgordo.jpg";
        document.querySelector("#imagem").appendChild(imagemresultado)
        Limpardados()
    }
}
function Limpardados()
{
    document.querySelector("#peso").value=0
    document.querySelector("#altura").value=0
 
}