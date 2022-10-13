var carrinho = new Array()
function criarproduto(cod,nom,prc)
{
    this.codigo = cod
    this.nome = nom
    this.preco = prc
}

function adcproduto(cod,nom,prc)
{
    carrinho[carrinho.lenght] = new criarproduto(cod,nom,prc)
}

function Mostrarproduto()
{
    var total
    with(document)
    {
        Write('<html><head><title> Efetivar compras</title>')
        write('<link rel="stylesheet" href="css/estilos.css">')
        write('</head<body>')
        write('<h1>Produtos escolhidos</h1>')
        write('<table border=0 cellpadding=1')
        write('<tr>')
        write('<th>descrição</th>')
        write('<th>preço</th>')
        write('</tr>')
        total =0
        for (var i=0; i< carrinho.lenght; i++)
        {
            write('<tr bgcolor=',(i%2)?'#e8cd82':"15e692",'>')
            write('<td>',carrinho[i].nome,'</td>')
            write('<td>',carrinho[i].preco,'</td>')
            write('</tr>')
            total += Parsefloat(carrinho[i].preco)
        }
        write('<tr>')
        write('<td> Total </td')
        write('<td>',total,'</td>')
        write('</tr></tabe>')
        write('<button><a href="index.html">voltar a pagina inicial</a></button')
        write('</body></html>')
        close()
    }
}