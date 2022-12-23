<?php
class Login
{
    private $email;
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
        $querry = ("select  email,senha  from empregados where email ='".$this -> email."' and  senha ='".$this -> senha."';");
        $sql = mysqli_query($banco, $querry);
        if ($sql) {
            echo ("Login Encontrado");
            header('location:../GUI/vizualizaServicos.php');
        } else {
            echo ("Não foi possível fazer login , tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }   
}
?>