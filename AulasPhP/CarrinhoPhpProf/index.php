<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta http-equiv="refresh" content="10;url=cadastro.php" />

<title>Exercício 01</title>

<style>
	#imagem
	{
	 position: relative;
    -webkit-animation: mymove 5s infinite;
	 margin-top:10%;
    }
	
	@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 650px;}
}

#borda
{
	border-style: outset;
    border-width: 5px;	
	border-color:#F30;
	margin-top:10%;
}     

#mensagem
{
	text-align: center;
	font-size:50px;	
	font-family:crafty-girls;
	color:#33F;
}

</style>



</head>

<body>

<div id="imagem">
	<img src="imagem/logoPHP.jpg">
</div>

<div id="borda">
	<p id="mensagem"> Exercício da aula de Linguagem para Web. </p>
</div>

</body>
</html>