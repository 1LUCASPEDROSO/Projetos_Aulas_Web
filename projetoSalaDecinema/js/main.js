
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
    write('<table class="tabelaprodutos">')
    write('<tr>')
    write('<th>Filme:</th>')
    write('<th>data:</th>')
    write('<th>hora:</th>')
    write('<th>preço:</th>')
    write('<th>tipo:</th>')
    write('<th>sala:</th>')
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
    write('<td>',ingresso[i].hora,'</td>')
    write('<td>',qntingresso,'</td>')
    write('</tr>')
    total += (qntingresso * 20)
    }
    write('<tr>')
    write('<td> Total </td')
    write('<td>',total,'</td>')
    write('</tr></table>')
    write('<button class="btnaddcarrinho"><a href="index.html">voltar a pagina inicial</a></button')
    write('<footer><p class="pfooter">Todos os direitos rezervados a 1drakoon1</footer>')
    write('</body></html>')
}
}




