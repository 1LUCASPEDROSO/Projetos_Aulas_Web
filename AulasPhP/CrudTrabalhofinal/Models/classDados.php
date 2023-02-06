<?php
class dadosServicos
{
    private $nome;
    private $telefone;
    private $email;
    private $dataEntrada;
    private $dataSaida;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function inserirDados()
    {

        include('conexao.php');
        $querry = ("insert into servicos values(null,'".$this -> nome."',".$this -> telefone.",'".$this -> email."','".$this -> dataEntrada."','".$this -> dataSaida.'";');
        $sql = mysqli_query($banco, $querry);
        listarDados();
        if ($sql) {
            echo ("serviço cadastrado com sucesso.");
        } else {
            echo ("Não foi possível cadastrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }
    public function listarDados()
    {
        include('conexao.php');
        $querry = ("select '".$this ->dataEntrada."'.pousada1 and '".$this ->dataEntrada."'.pousada2 from pousada1 and pousada2;");
        $sql = mysqli_query($banco, $querry);
        $linhas = mysqli_num_rows($sql);
        if ($linhas >= 1) {
            echo('Essa data ja ja foi rezervada por algum user, por favor escolha outra data de entrada');
        }
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