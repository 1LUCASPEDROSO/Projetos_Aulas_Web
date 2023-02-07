<?php
class dadosServicos
{
    private $nome;
    private $telefone;
    private $email;
    private $pousada;
    private $dataEntrada;
    private $dataSaida;
    private $totalPessoa;
    private $quartos;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function inserirDadosPousada1()
    {
        include('classDados.php');
        $CD = new dadosServicos;
        include('conexao.php');
        $querry = ("insert into pousada1 values(null,'".$this -> nome."',".$this -> telefone.",'".$this -> email."','".$this -> dataEntrada."','".$this -> dataSaida.'",'.$this -> $totalPessoas."','".$this -> quartos."';");
        $sql = mysqli_query($banco, $querry);
        $CD -> ProcurarOcupacaoPousada1();
        if ($sql) {
            echo ("serviço cadastrado com sucesso.");
        } else {
            echo ("Não foi possível cadastrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }
    public function inserirDadosPousada2()
    {
        include('classDados.php');
        $CD = new dadosServicos;
        include('conexao.php');
        $querry = ("insert into pousada2 values(null,'".$this -> nome."',".$this -> telefone.",'".$this -> email."','".$this -> dataEntrada."','".$this -> dataSaida.'";');
        $sql = mysqli_query($banco, $querry);
        $CD -> ProcurarOcupacaoPousada2();
        if ($sql) {
            echo ("serviço cadastrado com sucesso.");
        } else {
            echo ("Não foi possível cadastrar, tente novamente.");
            echo ("<br> Causa do erro: " . mysqli_connect_error());
        }
        mysqli_close($banco);
    }
    public function ProcurarOcupacaoPousada1()
    {
        include('conexao.php');
        $querry = ("select ".$this ->dataEntrada."from pousada1 where ".$this -> dataEntrada.";");
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
    public function ProcurarOcupacaoPousada2()
    {
        include('conexao.php');
        $querry = ("select '".$this ->dataEntrada."from pousada2 where '".$this -> dataEntrada.";");
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
    public function listarOcupacoespousada1()
    {
        include('conexao.php');
        $querry = ("select * from pousada1");
        $linhas = mysqli_num_rows($sql);
        echo ("
            <h1>Lista de servicos pousadas 2 estrelas</h1><br><br>
            <table class='w3-table-all w3-hoverable'>
            <tr>
            <td>Nome cliente</td>
            <td>Telefone cliente</td>
            <td>Email cliente </td>
            <td>Data de entrada </td>
            <td>Data de saida </td>
            <td>Total de pessoas </td>
            <td>Quartos </td>
            </tr>
        ");
        for ($i = 0; $i < $linhas; $i++) {
            $registro = mysqli_fetch_row($sql);
            echo ("
            <tr>
            <td>$registro[0]</td>
            <td>$registro[1]</td>
            <td>$registro[2]</td>
            <td>$registro[3]</td>
            <td>$registro[4]</td>
            <td>$registro[5]</td>
            <td>$registro[6]</td>
            </tr>
        ");
        } //  for para percorrer linhas do banco e listar todos os dados
        echo ("</table>");
    mysqli_close($banco);
    }
    public function listarOcupacoespousada2()
    {
        include('conexao.php');
        $querry = ("select * from pousada2");
        $linhas = mysqli_num_rows($sql);
        echo ("
            <h1>Lista de servicos pousada 4 estrelas</h1><br><br>
            <table class='w3-table-all w3-hoverable'>
            <tr>
            <td>Nome cliente</td>
            <td>Telefone cliente</td>
            <td>Email cliente </td>
            <td>Data de entrada </td>
            <td>Data de saida </td>
            <td>Total de pessoas </td>
            <td>Quartos </td>
            </tr>
        ");
        for ($i = 0; $i < $linhas; $i++) {
            $registro = mysqli_fetch_row($sql);
            echo ("
            <tr>
            <td>$registro[0]</td>
            <td>$registro[1]</td>
            <td>$registro[2]</td>
            <td>$registro[3]</td>
            <td>$registro[4]</td>
            <td>$registro[5]</td>
            <td>$registro[6]</td>
            </tr>
        ");
        } //  for para percorrer linhas do banco e listar todos os dados
        echo ("</table>");
    mysqli_close($banco);
    }
}









?>