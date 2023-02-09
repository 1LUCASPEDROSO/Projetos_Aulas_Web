<?php
class dadosLogin
{
    private $login;
    private $senha;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function realizarLogin()
    {
        include('conexao.php');
        include('../Models/classDados.php');
        $cd = new dadosServicos;
        $querry = ("select email, senha  from administracao where email = '" . $this->login . "' and senha ='" . $this->senha . "';");
        $sql = mysqli_query($banco, $querry);
        if ($sql == true) {
            $cd->listarOcupacoespousada1();
            $cd->listarOcupacoespousada2();
        } else {
            echo ("Não foi possível entrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }

}
?>