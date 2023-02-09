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
    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function inserirDadosPousada1()
    {
        //implode();
        // explode();
        echo ('chegou na InserirDadosPousada 1');
        include('conexao.php');
        $querry2 = ("select '" . $this->dataEntrada . "' from pousada1 where data_entrada = '" . $this->dataEntrada . "';");
        $sql1 = mysqli_query($banco, $querry2);
        $linhas = mysqli_affected_rows($banco);
        if ($linhas = 1) {
            echo ('Essa data ja ja foi rezervada por algum user, por favor escolha outra data de entrada');
        } else {
            $querry = ("insert into pousada1 values(null,'" . $this->nome . "','" . $this->telefone . "','" . $this->email . "','" . $this->dataEntrada . "','" . $this->dataSaida . "','" . $this->totalPessoa . "','" . $this->quartos . "');");
            $sql = mysqli_query($banco, $querry);
            if ($sql) {
                echo ("serviço cadastrado com sucesso.");
            } else {
                echo ("Não foi possível cadastrar, tente novamente.");
                echo ("<br> Causa do erro: " . mysqli_connect_error());
            }
            mysqli_close($banco);
        } // fim else querry2
    }
    public function inserirDadosPousada2()
    {
        echo ('chegou na InserirDadosPousada 2');
        include('conexao.php');
        $querry2 = ("select '" . $this->dataEntrada . "' from pousada2 where data_entrada = '" . $this->dataEntrada . "';");
        $sql1 = mysqli_query($banco, $querry2);
        $linhas = mysqli_affected_rows($banco);
        if ($linhas = 1) {
            echo ('Essa data ja ja foi rezervada por algum user, por favor escolha outra data de entrada');
        } else {
            $querry = ("insert into pousada2 values(null,'" . $this->nome . "','" . $this->telefone . "','" . $this->email . "','" . $this->dataEntrada . "','" . $this->dataSaida . "','" . $this->totalPessoa . "','" . $this->quartos . "');");
            $sql = mysqli_query($banco, $querry);
            if ($sql) {
                echo ("serviço cadastrado com sucesso.");
            } else {
                echo ("Não foi possível cadastrar, tente novamente.");
                echo ("<br> Causa do erro: " . mysqli_connect_error());
            }
            mysqli_close($banco);
        } // fim else querry2
    }
    public function listarOcupacoespousada1()
    {
        include('conexao.php');
        $querry = ("select * from pousada1");
        $sql = mysqli_query($banco, $querry);
        $linhas = mysqli_num_rows($sql);
        echo ("
            <head>
            <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
            </head
            <body>
            <h1 class='w3-center'>Lista de serviços pousada 2 estrelas</h1><br><br>
            <table class='w3-table-all w3-hoverable'>
            <tr>
            <td>ID:</td>
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
        echo ("</table> </body>");
        mysqli_close($banco);
    }
    public function listarOcupacoespousada2()
    {
        include('conexao.php');
        $querry = ("select * from pousada2");
        $sql = mysqli_query($banco, $querry);
        $linhas = mysqli_num_rows($sql);
        echo ("
        <head>
        <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
        </head
        <body>
        <h1 class='w3-center'>Lista de serviços pousada 4 estrelas</h1><br><br>
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
        echo ("</table> </body>");
        mysqli_close($banco);
    }
}
?>