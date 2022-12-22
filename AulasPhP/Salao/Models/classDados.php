<?php
class dadosServicos
{
    private $nome;
    private $telefone;
    private $email;
    private $data;
    private $hora;
    private $empregado;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function inserirDados()
    {

        include('conexao.php');
        $teste = $this->nome;
        $querry = ("insert into servicos values(null,'".$this -> nome."',".$this -> telefone.",'".$this -> email."','".$this -> data."','".$this -> hora."','".$this -> empregado."');");
        $sql = mysqli_query($banco, $querry);
        if ($sql) {
            echo ("serviço cadastrado com sucesso.");
        } else {
            echo ("Não foi possível cadastrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }

    public function teste ()
    {
        echo ($this ->nome);
        echo ($this ->telefone);
        echo ($this ->email);
        echo ($this ->data);
        echo ($this ->hora);
        echo ($this ->empregado);
    }


}









?>