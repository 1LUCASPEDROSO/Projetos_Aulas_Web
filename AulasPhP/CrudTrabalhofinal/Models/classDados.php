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
        echo('dehfwejofheopfhqeo');
        include('conexao.php');
        $querry = "insert into pousada1 values (null,'lucas1','54948904894','pedrosolucas1745@gmail.com','2023-07-12','2023-09-15','4','1';";
        $sql = mysqli_query($banco, $querry);
        //where".$this -> dataEntrada.";"
       // $querry2 = ("select ".$this ->dataEntrada." from pousada1;");
     //   $sql1 = mysqli_query($banco, $querry2);
      //  $linhas = mysqli_affected_rows($banco);
     //   if ($linhas) {
    //        echo('Essa data ja ja foi rezervada por algum user, por favor escolha outra data de entrada');
   //     }
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
        echo ('sdbqdgoduiqgodiuqdghqioudghqioudqhudqhiod');
        include('conexao.php');
        $querry = ("insert into pousada2 values(null,'".$this -> nome."',".$this -> telefone.",'".$this -> email."','".$this -> dataEntrada."','".$this -> dataSaida.'",'.$this -> totalPessoa."','".$this -> quartos."';");
        $sql = mysqli_query($banco, $querry);
        $_querry2 = ("select ".$this ->dataEntrada."from pousada1 where ".$this -> dataEntrada.";");
        $sql1 = mysqli_query($banco, $querry2);
        $linhas = mysqli_num_rows($sq1);
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