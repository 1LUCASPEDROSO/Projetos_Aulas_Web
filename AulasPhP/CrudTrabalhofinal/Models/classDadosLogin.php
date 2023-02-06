<?php
 class dadosLogin
 {
    private $login;
    private $senha;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function realizarLogin()
    {
        include('conexao.php');
        $querry = ("select '" . $this->login . "','" . $this->senha . "'. from ADM where email = '" . $this->email . "' and senha='" . $this->senha . "';");
        $sql = mysqli_query($banco, $querry);
        if ($sql) {
            echo ("login feito  com sucesso.");
        } else {
            echo ("Não foi possível cadastrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }

 }
?>