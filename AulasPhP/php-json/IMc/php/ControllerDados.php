<?php
if($_POST)
{
 include("ClassDados.php");
 $imc = new Calculcadorimc;
 $imc -> $altura = $_POST["altura"];
 $imc -> $peso = $_POST["peso"];
 $imc -> $genero = $_POST["genero"];
 $resultado = $imc -> CalculoIMC();

}







?>