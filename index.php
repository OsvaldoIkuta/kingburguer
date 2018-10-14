<!DOCTYPE html>
<html>
<head>

	<!--/*  - FORMATAR O BANNER NO 480
	- PAGINAS : 
			SOBRE
			CARDAPIO(8 LANCHES)
			CONTATO
	- MEDIA QUERY(800 E 481)



	MANDAR NO EMAIL burnes@professorburnes.com até 09/04 */-->


	<title> King Burger</title>
	<meta charset="utf-8">
	<meta name="description"
	content="A melhor haburgueria de Tapejara">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<base href="http://localhost/kingburger/">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">

	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="shortcut icon" href="images/logo.png">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<header>
		<nav>
			<a href="index.php" title="Home" class="logo kingburguer"> <img src="images/kingburger.png" title="kingburger" alt="kingburguer"></a>
		
			<button type="button" id="menu">
				<i class="fas fa-bars"></i>
			</button>

			<ul>
				<li>
					<a href="home" title="Home"> Home </a>
				</li>
				<li>
					<a href="sobre" title="Sobre"> Sobre </a>
				</li>
				<li>
					<a href="cardapio" title="Cardápio"> Cardápio </a>
				</li>
				<li>
					<a href="contato" title="Contato"> Contato </a>
				</li>
			</ul>
		</nav>
		<div class="clear"></div>
		<div class="msg animated fadeInLeft">
			<h1>Mega Max Burguer </h1>
			<p> 4 Hamburgeres de Carne + Bacon Crocante</p>
			<a href="cardapio" class="btn btn-primary"> Ver Cardápio </a>
		</div>

		<img src="images/10.png" alt="Mega Max Burger" title="Mega Max Burger" class="max animated fadeInRight">

	</header>

	<main>
		<?php
			//recuperar o parametro p
			if (isset ($_GET["p"])) {
				$p = $_GET["p"];
				//echo $p;
			} else {
				$p = "home";
			}
			
			//nome do arquivo
			$pagina = "paginas/".$p.".php";
			//verificar se a pagina existe
			if (file_exists($pagina)){
				include $pagina;
			} else {
				include "paginas/404.php";
			}


		?>


	</main>

	<div class="bacon">

	</div>
	
	<!--<img src="images/bacon.jpg" alt="Mega Max Burger" title="Mega Max Burger" class="bacon">-->
	

	<footer>
		
		<div class="container row">
			<div class="quadrado">
				<h3> Menu de Acesso</h3>
					<ul class="lista">
						<li> <a href="home"> Home </a> </li>
						<li> <a href="sobre"> Sobre </a> </li>
						<li> <a href="cardapio"> Cardápio </a> </li>
						<li> <a href="contato"> Contato </a> </li>
				
					</ul>
				
			</div>

			<div class="quadrado face-e-maps" ">


				<div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-width="500" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
			</div>

			<div class="quadrado face-e-maps">			
				<iframe
  					width="100%"
  					height="250"
  					frameborder="0" style="border:0"
  					src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCej7hBaUnnnU5puJlM2gzq9SsUlNqQMnI&q=UNIPAR - Zona III, Umuarama - PR" allowfullscreen>
				</iframe>
			</div>

		</div>



		<p> Desenvolvido por Osvaldo Massaharu Ikuta - Todos os direitos reservados </p>
	</footer>

	<script type="text/javascript">
		$("#menu").click(function(){
			$("nav ul").toggle();
		})

		$(".kingburguer").hover(function(){
    		$(".kingburguer").addClass('animated flipInX');
    	}, function(){
    		setTimeout(function(){
  				$(".kingburguer").removeClass('animated flipInX');
  			}, 600);
    		
		});
	</script>

	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=117517875560376&autoLogAppEvents=1';
  		fjs.parentNode.insertBefore(js, fjs);
	 	}(document, 'script', 'facebook-jssdk'));

	</script>
	

	<!--/*  - FORMATAR O BANNER NO 480
	- PAGINAS : 
			SOBRE
			CARDAPIO(8 LANCHES)
			CONTATO
	- MEDIA QUERY(800 E 481)



	MANDAR NO EMAIL burnes@professorburnes.com até 09/04 */

-->

</body>
</html>