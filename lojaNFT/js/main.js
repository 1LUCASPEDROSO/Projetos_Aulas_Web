var carrinhoCompras = new Array();

function Produtos(cod,nom,prc,qnt)
{
      this.codigo = cod;
      this.nome = nom; 
      this.prc = prc;
      this.qnt = qnt;
}
function adcprodutos(cod,nom,prc,qnt)
{
    carrinhoCompras[carrinhoCompras.length] = new Produtos(cod,nom,prc,qnt); 
}
function mostrarcarrinho()
{
    var qntingresso =  parseint(document.querySelector('#1').value)
    console.log(qntingresso)
    var totalcarrinho;
    with(document){

    write('<head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="css/estilos.css"><title>NFT Store</title></head><body><div class="container"><div class="bunner"><h1 class="h1">Carrinho</h1></div>')
    write('<table class="tabelaprodutos">')
    write('<tr>')
    write('<th>Produto:</th>')
    write('<th>preço:</th>')
    write('<th>Quantidade:</th>')
    write('</tr>')
    total =0
    for(var i=0; i < carrinhoCompras.length;i++){
    write('<tr>')
    write('<td>',carrinhoCompras[i].nome,'</td>')
    write('<td>',carrinhoCompras[i].prc,'</td>')
    write('<td>',carrinhoCompras[i].qnt,'</td>')
    write('</tr>')
    total += parseFloat(carrinhoCompras[i].prc)
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
