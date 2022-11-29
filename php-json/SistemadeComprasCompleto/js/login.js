function cadastrarlogin() {
    var emailCadastro = document.querySelector("#EmailCadastro").value;
    var senhaCadastro = document.querySelector("#SenhaCadastro").value;
    console.log(emailCadastro,senhaCadastro);
    alert("email:"+emailCadastro,"senha:"+senhaCadastro);
    window.open("TelaProdutos.html");
    var Dados = new Array();
    Dados =[emailCadastro,senhaCadastro];
}

function Validarlogin() {
    var email = document.querySelector("#Email").value
    var senha = document.querySelector("#Senha").value

    if(email != "pedrosolucas1745@gmail.com" || senha != "viper1")
    {
        alert("login incorreto ou senha incorretos / Login inexistente")
        window.open("php/TelaError404.php")
    }

    else
    {
       window.open("TelaProdutos.html")
    }   
}