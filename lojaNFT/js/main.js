var carrinhoCompras = new Array();

function Produtos(cod,nom,prc,qnt)
{
    cod = this.codigo;
    nom = this.nome;
    prc = this.prc;
    qnt = this.qnt;
}
function adcprodutos(cod,nom,prc,qnt)
{
    carrinhoCompras[carrinhoCompras.length] = new Produtos(cod,nom,prc,qnt); 
}
function mostrarcarrinho()
{
    var totalcarrinho;
    with(document){

    write('<html><head><title>Carrinho</title><link rel="stylesheet" href="css/estilos.css"></head>')
    write('<body><h1>produtos escolhidos</h1>')
    write('<table class="tabelaprodutos">')
    write('<tr>')
    write('<th>Produto</th>')
    write('<th>preço:</th>')
    write('<th>Quantidade:</th>')
    write('</tr>')
    total =0
    for(var i=0; i< carrinhoCompras.length;i++){
    write('<tr>')
    write('<td>',carrinhoCompras[i].nome,'</td>')
    write('<td>',carrinhoCompras[i].prc,'</td>')
    write('<td>',carrinhoCompras[i].qnt,'</td>')
    write('</tr>')
    }
    write('<tr>')
    write('<td> Total </td')
    write('<td>',total,'</td>')
    write('</tr></table>')
    write('<button><a href="index.html">voltar a pagina inicial</a></button')
    write('</body></html>')
}
}
function teste()
{
    with(document){
    write('<html><head><title>Carrinho</title><link rel="stylesheet" href="css/estilos.css"></head><body><p>teste</p></body></html>')
    }
    
}