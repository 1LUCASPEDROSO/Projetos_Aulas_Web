var email = document.querySelector("#Email").value
var senha = document.querySelector("#Senha").value
function Validarlogin() {
    let id = new importdados()
    var vetorDados = [id.email + "," + id.senha,]
    console.log(vetorDados)
    alert("email;"+vetorDados[0])
    if(email && senha != vetorDados[0]){
        alert("login inexistente")
        window.open("cadastar.hmtl")
    }
    
}
function cadastrarlogin(email,senha) {
    id.email = email
    id.senha = senha
    Notification("login feito com sucesso")
    alert("email:"+email,"senha:"+senha)
    window.open("index.html")
}
