function cadastrarlogin() {
    var email = document.querySelector("#Email").value
    var senha = document.querySelector("#Senha").value
    console.log(email,senha)
    alert("email:"+email,"senha:"+senha)
    window.open("telaProdutos.html");
}
function adcsenha ()
{
    var Dados = new Array();
    Dados[Dados.length] = new email,senha;
}
function Validarlogin() {
    var email = document.querySelector("#Email").value
    var senha = document.querySelector("#Senha").value
    for(let i; i< Dados.length; i++)
    {
        if(email && senha != Dados[Dados.lenght]){
            alert("login inexistente")
            window.open("TelaCadastro.html")
        }
    }
    

    
}

