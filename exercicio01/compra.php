<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Compra</title>

<style>
	table
	{
		padding:10%;
		margin-left:33%;
		background-color:#FFF;	
	}
	#topo
	{
		
		width:30%;
		margin-left:35%;
			
	}
	#fundo
	{
		background-image:url(imagem/fundo2.jpg);
		background-repeat:repeat;	
	}
	caption
	{
		font-size:30px;
		color:#FFF;	
	}
	
</style>



</head>

<body id="fundo">



<?php

$nome= $_POST["nome2"];
$cpf = $_POST["cpf2"];
$escolha = $_POST["opcao"];
//echo $nome."<br>".$cpf."<br>";
$pagamento;
$cont=0;

$produtos= $_REQUEST['produto'];

if (!empty($produtos)) {                
      $qtd = count($produtos);
       for ($i = 0; $i < $qtd; $i++) {
          // echo $produtos[$i]."<br>";//imprime os itens 
		   $cont = $cont + $produtos[$i];
       }
//	   echo "Total:  ".$cont;
 }
 
 switch( isset( $escolha ) )
 {
 	case 'dinheiro':
		$pagamento=$cont - ($cont*0.05);
	break;
	case '5x':
		$pagamento=$cont + ($cont*0.05);
	break;
	case '8x':
		$pagamento=$cont + ($cont*0.1);
	break;
	case '12x':
		$pagamento=$cont + ($cont*0.15);
	break;
	
 }
 //echo "<br>pagamento:  ".$pagamento;
 
 
 

?>

<div >
	<img id="topo" src="imagem/logo2.jpg">
</div>

<div>
<table>
  <caption>
    <u>Comprovante de compra:</u>
  </caption>
  <tr>
    <td>NOME:</td>
    <td><?php echo $nome; ?></td>
  </tr>
  <tr>
    <td>CPF:</td>
    <td><?php echo $cpf; ?></td>
  </tr>
  <tr>
    <td>TOTAL A PAGAR:</td>
    <td><?php echo "R$ ".number_format($pagamento, 2, ','); ?></td>
  </tr>
</table>
</div>



</body>
</html>