class login {
    login(){
        importdados = new importdados()
        function criarLogin() {
            importdados.email = document.querySelector("#Email").value
            importdados.senha = document.querySelector("#Senha").value
            if(email != "lucas1" && senha != "pedro"){
               alert("logins incorretos")
               window.open("Cadastar.html")
            }
            else
            {
               alert("login feito com sucesso")
            }
           }
    }
}



