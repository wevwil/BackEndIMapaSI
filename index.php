<?php
	//alterei aqui
	//include("dados.php");
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<!-- //alterei aqui -->
				<li><a href="#Home" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="#" title="Conheça a Dona Dirce" alt="Conheça a Dona Dirce">Conheça a Dona Dirce</a></li>
                <li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para a casa da Dona Dirce, e escolha sua Marmita!!!</h1>
                    </header>
                    <p> Impossível não voltar novamente</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<!-- //alterei aqui -->
				<h1><a name="tutorial">Nosso Ultimos tutoriais</h1></a>
				<p>Desfrute dos tutoriais, eles vão lhe auxiliar nesta caminhada!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer saber mais?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>
</body>
</html>