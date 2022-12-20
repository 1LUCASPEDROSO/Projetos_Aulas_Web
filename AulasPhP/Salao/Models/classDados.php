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
        $sql = mysqli_query($banco, "insert into servicos values(null,'$nome',$telefone,'$email','$data','$hora','$empregado');");
        if ($sql) {
            echo ("serviço cadastrado com sucesso.");
        } else {
            echo ("Não foi possível cadastrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }



}









?>