<?php
class dadosUser
{
    function  PegarDados()
    {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
    }
}
?>