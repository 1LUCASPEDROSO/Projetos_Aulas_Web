<?php 


function validaçãoLogin()
{
    $email1 = $_POST["Email"];
    $senha1 = $_POST["Senha"];
    if($email1 != "pedrosolucas1745@gmail.com" || $senha1="viper1")
    {
        header('Location: TelaCadastro.html');
        $emailcadastro= $_POST["EmailCadastro"];
        $senhacadastro= $_POST["SenhaCadastro"];
        if($emailcadastro & $senhacadastro != null)
        {
            header('Location: TelaProdutos.html');
        }
        elseif($emailcadastro || $senhacadastro = null){
            header("location: TelaError404.php");
        }
    }
    else{
        header('Location: TelaProdutos.html');
    }
}
?>