
    ingresso = new Array();
     function dadoscinema(cod,nom,dt,hr,prc,tp,sl) {
     this.codigo = cod;
     this.nomefilme = nom;
     this.data = dt;
     this.hora = hr;
     this.preco = prc;
     this.tipo = tp;
     this.sala = sl;    
 }
  function adcionaringresso(cod,nom,dt,hr,prc,tp,sl){
    ingresso[ingresso.length] = new dadoscinema(cod,nom,dt,hr,prc,tp,sl);
    for (let i = 0; i < ingresso.length; i++) {
        console.log(ingresso[i].codigo)
        console.log(ingresso[i].nomefilme)
        console.log(ingresso[i].data)
        console.log(ingresso[i].hora)
        console.log(ingresso[i].preco)
        console.log(ingresso[i].tipo)
        console.log(ingresso[i].sala)
     

     }
 }
 function mostrarcarrinho()
{
    var qntingresso =  parseInt(document.querySelector('#ig').value)
    var totalcarrinho;
    with(document){
       
    console.log(qntingresso)
    write('<head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="css/estilos.css"><title>checkout</title></head><body><div class="container"><div class="bunner"><h1 class="h1">Carrinho</h1></div>')
    write('<br><br>')
    write('<table class="tabaelainfos">')
    write('<tr>')
    write('<th>Filme:</th>')
    write('<th>Data:</th>')
    write('<th>Hora:</th>')
    write('<th>preço:</th>')
    write('<th>Tipo:</th>')
    write('<th>Sala:</th>')
    write('<th>Quantidade de ingressos:</th>')
    write('</tr>')
    total =0
    for(var i=0; i < ingresso.length;i++){
    write('<tr>')
    write('<td>',ingresso[i].nomefilme,'</td>')
    write('<td>',ingresso[i].data,'</td>')
    write('<td>',ingresso[i].hora,'</td>')
    write('<td>',ingresso[i].preco,'</td>')
    write('<td>',ingresso[i].tipo,'</td>')
    write('<td>',ingresso[i].sala,'</td>')
    write('<td>',qntingresso,'</td>')
    write('</tr>')
    total += (qntingresso * 20)
    }
    write('<tr>')
    write('<td> Total: </td')
    write('<td>',total,'</td>')
    write('</tr></table>')
    write('<br><br>')
    write('<button class="btnpgi"><a href="index.html">voltar a pagina inicial</a></button')
    write('</body></html>')
}
}
function ocuparcadeira1()
{
    let c = document.querySelector(".cadeiras1").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}

function ocuparcadeira2()
{
    let c = document.querySelector(".cadeiras2").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira3()
{
    let c = document.querySelector(".cadeiras3").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira4()
{
    let c = document.querySelector(".cadeiras4").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira5()
{
    let c = document.querySelector(".cadeiras5").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira6()
{
    let c = document.querySelector(".cadeiras6").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira7()
{
    let c = document.querySelector(".cadeiras7").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira8()
{
    let c = document.querySelector(".cadeiras8").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira9()
{
    let c = document.querySelector(".cadeiras9").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}
function ocuparcadeira10()
{
    let c = document.querySelector(".cadeiras10").style.backgroundColor = 'green'
    alert ("lugar escolhido")
}

