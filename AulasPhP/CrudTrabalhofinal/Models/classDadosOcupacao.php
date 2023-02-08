<?php
 class dadosOcupacao
 {
    public function ProcurarOcupacaoPousada1()
    {
        include('classDados.php');
        $cd = new dadosServicos;
        include('conexao.php');
        $querry = ("select ".$cd ->dataEntrada."from pousada1 where ".$cd -> dataEntrada.";");
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
        include('classDados.php');
        $cd = new dadosServicos;
        include('conexao.php');
        $querry = ("select '".$cd ->dataEntrada."from pousada2 where '".$cd -> dataEntrada.";");
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