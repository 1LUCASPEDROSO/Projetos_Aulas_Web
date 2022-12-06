<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
 
    <div class='ContainerMain'>
        <div class='ContainerLogin'>
           <img  id='imagemLogin' src='imagens/imagemLogin.png' alt='Login'>
            <form id='Formulariologin' action='php/Dadosuser.php' method='post'>
                <label id='formalabels' for='Email'>Email:</label>
                <input type='Email' id='Email'>
                <label id='formalabels' for='Senha'>Senha:</label>
                <input type='password' id='Senha'>
                <button id='btnLogin' action='validaçãoLogin()'>Login</button>
            </form>
        </div>
    </div>
    <?php 
function validaçãoLogin()
{
    $email1 = $_POST["Email"];
    $senha1 = $_POST["Senha"];
    if($email1 != "pedrosolucas1745@gmail.com" || $senha1!="viper1")
    {
        header('Location: TelaCadastro.html');
        $emailcadastro= $_POST["EmailCadastro"];
        $senhacadastro= $_POST["SenhaCadastro"];
        if($emailcadastro & $senhacadastro != null)
        {
            header('Location: TelaProdutos.html');
        }
        elseif($emailcadastro || $senhacadastro = null){
            header("Location: TelaError404.php");
        }
    }
    else{
        header('Location: TelaProdutos.html');
    }
}
?>
</body> 
</html>
<script src="js/login.js"></script>
<script src="js/main.js"></script>
