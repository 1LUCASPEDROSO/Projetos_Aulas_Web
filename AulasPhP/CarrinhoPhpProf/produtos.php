<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Produtos</title>

<style>
	p
	{
		padding:5%;
		font-size:30px;
		color:#FFF;
		text-align:justify;
		width:80%;
		
	}
	
	table
	{
		/*padding:5%;*/
		margin:10%;
		background-color:#FFF;	
	}
	
	#fundo
	{
		background-image:url(imagem/fundo2.jpg);
		background-repeat:repeat;	
	}
	
	#topo
	{
		
		width:30%;
		margin-left:35%;
			
	}
	
	
	
	button
	{
 		cursor:pointer;
 		border: 0px none;
 		background-color: transparent;
 		padding: 0px 0px 0px 0px;
	}
	button.img
	{
 		border: 0px none;
	}
	
	#celula1
	{
		text-align:center;
		font-size:30px;
		color:#C00;
		
	}
	
</style>


</head>

<body id="fundo">


<?php

$nome            = $_POST["nome"];
$senha           = $_POST["senha"];
$confirmar_senha = $_POST["confirma_senha"];

if( is_numeric($nome) || ($senha != $confirmar_senha ) )
{
	 header("Location:cadastro.php");
	
}


?>


<div >
	<img id="topo" src="imagem/logo2.jpg">
</div>
<div>

<form method="post" action="compra.php">

<input type="hidden" name="nome2" value="<?php $nome=$_POST["nome"]; echo $nome; ?>">
<input type="hidden" name="cpf2" value="<?php $cpf=$_POST["cpf"]; echo $cpf; ?>">

<table>
 
  <tr>
    <td> <input type="checkbox" value="10.5" name="produto[]"> </td>
    <td> CAVILHA 08X50mm PACOTE COM 100 PEÇAS </td>
    <td><img src="imagem/1.jpg"/></td>
    <td> R$ 10,50 </tr>
  <tr>
    <td> <input type="checkbox" value="138.53" name="produto[]"> </td>
    <td> LACA BRANCA NITROCELULOSE FOSCA NC 232.112 (GAL) FARBEN </td>
    <td> <img src="imagem/2.jpg"/> </td>
    <td> R$ 138,53 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="7.42" name="produto[]"> </td>
    <td> DOBRADICA ACO REFOÇADO 3.1/2X3 CROMADO COM ACETINADO </td>
    <td> <img src="imagem/3.jpg"/> </td>
    <td> R$ 7,42 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="10.69" name="produto[]"> </td>
    <td> PREGOS AÇO SEM CABEÇA 2,5X35MM PACOTE COM 100 PREGOS 1122 BENFIX </td>
    <td> <img src="imagem/4.jpg"/> </td>
    <td> R$ 10,69 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="28.8" name="produto[]"> </td>
    <td> ALICATE BICO MEIA CANA RETO 6 CONSTRUTOR </td>
    <td> <img src="imagem/5.jpg"/> </td>
    <td> R$ 28,80 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="15.7" name="produto[]"> </td>
    <td> FITA DUPLA FACE FIXA FORTE 12MMX2M 3M </td>
    <td> <img src="imagem/6.jpg"/> </td>
    <td> R$ 15,70 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="23.3" name="produto[]"> </td>
    <td> MARTELO DE UNHA 27MM PROFISSIONAL WORKER </td>
    <td> <img src="imagem/7.jpg"/> </td>
    <td> R$ 23,30 </tr>
  </tr>
  <tr>
    <td><input type="checkbox" value="11.01" name="produto[]">  </td>
    <td> CHAVE PHILLPS H 5/16X6" CRV VONDER PLUS </td>
    <td> <img src="imagem/8.jpg"/> </td>
    <td> R$ 11,01 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="31.4" name="produto[]"> </td>
    <td> SERROTE PROFISSIONAL 24" W201024 WORK </td>
    <td> <img src="imagem/9.jpg"/> </td>
    <td> R$ 31,40 </tr>
  </tr>
  <tr>
    <td> <input type="checkbox" value="108.29" name="produto[]"> </td>
    <td> PLAINA PROFISSIONAL NR3 STANLEY </td>
    <td> <img src="imagem/10.jpg"/> </td>
    <td> R$ 108,29 </tr>
  </tr>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     
   
   <tr>
    <td>&nbsp;</td>
    <td id="celula1">Formas de pagamento</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td align="center"><input type="radio" name="opcao" value="dinheiro"></td>
    <td> à vista com dinheiro</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="radio" name="opcao" value="5x"></td>
    <td>5X a prazo com cartão</td>
    <td><b><u>Cartões de crédito aceitos:</u></b></td>
  </tr>
  <tr>
    <td align="center"><input type="radio" name="opcao" value="8x"></td>
    <td>8X a prazo com cartão</td>
    <td><img src="imagem/cartoes-de-credito.png"></td>
  </tr>
  <tr>
    <td align="center"><input type="radio" name="opcao" 12x></td>
    <td>12X a prazo com cartão</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> <button type="submit"><img src="imagem/compra.jpg" alt="Comprar" title="Comprar itens marcados"></button> 
    </td>
    <td>&nbsp;</td>
    <td> <button type="reset"><img src="imagem/lixeira.jpg" alt="Limpar" title="Limpar"         ></button> 
    </td>
  </tr>
 
</table>



</form>
</div>

</body>
</html>