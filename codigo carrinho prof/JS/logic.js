
var carrinho = new Array()
function produto(cod, nom, prc) {
    this.codigo = cod
    this.nome = nom
    this.preco = prc
}

function inclui(cod, nom, prc) {
    carrinho[carrinho.length] = new produto(cod, nom, prc)
}
function mostrar() {
    var total
    with(document)
    {
        write("<html><head><title>Efetivar compras</title>")
        write("<link rel=stylesheet type=text/css href=styles.css>")
        write("</head> <body>")
        write("<h1>Produtos Escolhidos</h1>")
        write("<table border=0 cellpadding=1")
        write("<tr>")
        write("<th>Descrição</th>")
        write("<th>Preço</th>")
        write("</tr>")
        total = 0
        for (var i = 0; i < carrinho.length; i++) {
            write("<tr bgcolor=", (i % 2) ? "e8cd82" : "#15e692", ">")
            write("<td>", carrinho[i].nome, "</td>")
            write("<td>", carrinho[i].preco, "</td>")
            write("</tr>")
            total += parseFloat(carrinho[i].preco)

        }
        write("<tr>")
        write("<td>Total</td>")
        write("<td>", total, "</td>")
        write("</tr></table)")
        write("<button><a href=index.html>Voltar para os produtos</a></button>")
        write("</body></html>")
    }
}