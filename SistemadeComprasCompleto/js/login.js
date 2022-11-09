function cadastrarlogin() {
    var emailCadastro = document.querySelector("#EmailCadastro").value;
    var senhaCadastro = document.querySelector("#SenhaCadastro").value;
    console.log(emailCadastro,senhaCadastro);
    alert("email:"+emailCadastro,"senha:"+senhaCadastro);
    window.open("TelaProdutos.html");
}

function Validarlogin() {
    var email = document.querySelector("#Email").value
    var senha = document.querySelector("#Senha").value

    if(email != "pedrosolucas1745@gmail.com" || senha != "pedro2014")
    {
        alert("login incorreto ou senha incorretos / Login inexistente")
        window.open("TelaCadastro.html")
    }

    else
    {
       window.open("TelaProdutos.html")
    }
    
}

