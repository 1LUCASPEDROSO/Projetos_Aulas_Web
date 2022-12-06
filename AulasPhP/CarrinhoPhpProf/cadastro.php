<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro do cliente</title>

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
		padding:5%;
		margin-left:30%;
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
	
	
</style>


</head>

<body id="fundo">

<div >
	<img id="topo" src="imagem/logo2.jpg">
</div>
<div>

<form method="post" action="produtos.php">
  <p>
    Preencha os campos do formulário de cadastro de clientes para realizar as compras.
  </p>

<table>
  
  <tr>
    <td> NOME: </td>
    <td> <input type="text" name="nome" required placeholder="digite seu nome"> </td>
  </tr>
  <tr>
    <td> CPF: </td>
    <td> <input type="number" name="cpf" required placeholder="digite número"> </td>
  </tr>
  <tr>
    <td> EMAIL: </td>
    <td> <input type="email" name="email" required placeholder="email@exemplo.com.br"> </td>
  </tr> 
  <tr>
    <td> SENHA: </td>
    <td> <input type="password" name="senha" required placeholder="digite uma senha"> </td>
  </tr>
  <tr>
    <td> CONFIRMAR SENHA: </td>
    <td> <input type="password" name="confirma_senha" required placeholder="repetir a senha"> </td>
  </tr>
  <tr>
    <td> <input type="submit" value="CADASTRAR"> </td>
    <td> <input type="reset" value="LIMPAR"> </td>
  </tr>
</table>



</form>

</div>

</body>
</html>