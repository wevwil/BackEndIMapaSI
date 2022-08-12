<?php

$ValorAtualGasolina = 6.70;
$ValorAtualAlcool = 4.30;
$MediaAbastecimento = 50;
$FatorVantagem = $ValorAtualAlcool / $ValorAtualGasolina;
$CustoTotalAbastecimento = $MediaAbastecimento * $ValorAtualAlcool;

$BoasVindas = "Ola Juliana, tudo bem? Seja bem vinda!!!<br><br>";

if ($FatorVantagem < 0.7)
{
    $Mensagem1 = "Hoje compensa abastecer seu carro com Alcool, o fator de vantagem é menor que 0.7<br><br>";
    $Mensagem2 = "E você gastará total de R$ $CustoTotalAbastecimento";
    //echo "$Mensagem1";
    //echo "$Mensagem2";

}else
{
    $Mensagem1 = "Hoje NÃO compensa abastecer seu carro com Alcool, ABASTEÇA COM GASOLINA, o fator de vantagem é MAIOR que 0.7<br><br>";
    $Mensagem2 = "E você gastará total de R$ $CustoTotalAbastecimento";
    //echo "$Mensagem1";
    //echo "$Mensagem2";

}
echo "<hr>";

?>


<!DOCTYPE html>
<html lang="en">
  
<body>
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Willian Carlos Barbosa de Souza">
    <meta name="generator" content="R.A 21131491-5">
    <title>PHP / Etanol / gasolina </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
  
<body>

<div id="cabecalho">

	<h4>Gasolina ou Etanol ?</h4>

</div>

 <div class="container" >
      
    <div class="content">      
 
      <!--resposta a Enfermeira-->

      <div id="content">
        
         <h4><?=$BoasVindas;?></h4>

      </div>
						  
      <div id="resposta"> 
				  
	  <h1><?=$Mensagem1;?></h1>
      <h1><?=$Mensagem2;?></h1>
	 
      </div>
	
    </div>
	
 </div>

	 <a class="links" id="redefinir"></a>
	
	  

 <style>
 
 
	body {
		padding: 0;
		margin: 0;
	}
 
 
 
	.espacador{
	width:100%
	height: 50px;
	float: inherit;
	}

	.content{
	background-color:#fcba03;
	width: 600px;
	min-height: 150px;    
	margin: 0px auto;
	position: relative;
	border-radius: 30px;

	}
	
	
	.contentd{
	background-color:#91e075;
	width: 600px;
	min-height: 150px;    
	margin: 0px auto;
	position: relative;
	border-radius: 30px;

	}
	
	moldura{
	background-color:#fcba03;
	
	}
	
	h1{
	font-size: 20px;
	color: #066a75;
	padding: 2px 0 10px 0;
	font-family: Arial,sans-serif;
	text-align: center;
	padding-bottom: 30px;
	}
	
	h4{
	font-size: 22px;
	color: #2F4F4F;
	padding: 2px 0 10px 0;
	font-family: Arial,sans-serif;
	font-weight: bold;
	text-align: center;
	padding-bottom: 60px;
	padding-top: 60px;
	}
	
	
	h1:after{
	content: ' ';
	display: block;
	width: 100%;
	height: 10px;
	margin-top: 10px;
	}	

	p{
	  margin-bottom:15px;
	}
	 
	.content p:first-child{
	  margin: 0px;
	}
	 
	label{
	  color: #405c60;
	  position: relative;
	}
		
	body{
	font-family: arial;
	}

	input {
	outline: none;
	}
 

	
	/*rodape */
	footer {
		
		bottom: 0;
		background-color: #87CEFA;
		color: #FFF;
		width: 100%;
		height: 200px;    
		text-align: center;
		line-height: 100px;
		}
		
</style>

  
</body>
  
</html>