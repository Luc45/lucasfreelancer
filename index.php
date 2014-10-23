<!DOCTYPE html>
<html>
	<head>
		<title>Lucas Bustamante - Freelancer Web BH - Sites e lojas virtuais</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fonts.css">
		<link rel="stylesheet" href="css/style.css">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
		<!--[if lte IE 8]>
		<style>
			.container {
				width:980px;
				margin:auto;
			}
			.col-md-6 {
				float:left;
			}
		</style>
		<![endif]-->
		
	</head>
	<body>
		<!-- Inicio -->
		<div class="container-fluid" id="inicio">
			<div class="container no-margin relative">
				<div class="container-centralizar-vertical">
					<!-- Lucas Bustamante -->
					<div id="lucas">
						<div id="gif">
							<img src="/img/lucas.gif" alt="Lucas - Freelancer Web em BH"/>
						</div>
						<div id="lucas-bustamante">
							<img src="/img/lucas-bustamante.gif" alt="Lucas Bustamante - Freelancer Web Belo Horizonte"/>
						</div>
					</div>
					<!-- Email -->
					<div id="meu-email">
						lucas@lucasfreelancer.com.br
					</div>
					<!-- Eu Sou -->
					<div id="eu-sou" class="centralizar-vertical-row">
						<span>Eu sou</span>
						<div id="freelancer-web">
							Freelancer Web para agências.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- O que faço -->
		<div class="container" id="o-que-faco">
			<div>
				Mais que seguir um briefing com atenção infindável
				aos detalhes técnicos, procuro sempre contribuir
				para alcançar os melhores resultados para meus
				clientes, através do resgate das questões fundamentais
				do objetivo de um website ou loja virtual, que muitas
				vezes no processo de criação acabam se perdendo.
			</div>
		</div>
		<!-- GitHub -->
		<div class="container-fluid" id="github">
			<div class="container no-margin">
				<div class="titulo">
					Acompanhe o Desenvolvimento pelo GitHub
				</div>
				<div class="texto">
					Cada projeto recebe um repositório privado no GitHub, onde você
					pode acompanhar detalhadamente o processo de desenvolvimento
					e até desenvolver em colaboração, se for o caso.
				</div>
				<img src="/img/github.png" src="Freelancer Web BH - Desenvolvimento com GitHub" class="git"/>
				<div class="rodape-github"></div>
			</div>
		</div>
		<!-- Cérebro -->
		<div class="container" id="cerebro">
			<div class="titulo">O lado direito e esquerdo do cérebro se completam.</div>
			<div id="features-do-meu-cerebro">
				<div class="col-md-6 divtable no-margin">
					<div class="lista-esquerdo">
						<ul>
							<li>HTML</li>
							<li>CSS</li>
							<li>JavaScript</li>
							<li>PHP</li>
							<li>Linux</li>
							<li>White Hat Hacking</li>
						</ul>
					</div>
					<div class="cerebro-esquerdo">
						<img src="/img/cerebro-esquerdo.svg"/>
					</div>
				</div>
				<div class="col-md-6 divtable no-margin">
					<div class="cerebro-direito">
						<img src="/img/cerebro-direito.svg"/>
					</div>
					<div class="lista-direito">
						<ul>
							<li>Senso de Design</li>
							<li>Design Responsivo</li>
							<li>Vetores e Bitmaps</li>
							<li>User Experience</li>
							<li>Landing Pages</li>
							<li>Conversão</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Posso lhe ser útil? -->
		<div class="container-fluid" id="posso-ser-util">
			<div class="container no-margin">
				<div class="titulo">Posso lhe ser útil?</div>
				<form action="enviar.php" method="POST" id="contato">
					<div class="item">
						<label for="nome">Seu Nome</label>
						<input type="text" name="nome" placeholder="Como você se chama?">
					</div>
					<div class="item">
						<label for="email">Email de Contato</label>
						<input type="text" name="email" placeholder="Um email válido que eu possa entrar em contato">
					</div>
					<div class="item">
						<label for="agencia">Sobre a Agência</label>
						<input type="text" name="email" placeholder="De qual agência você é?">
					</div>
					<div class="item">
						<label for="cliente">Sobre o Cliente Final</label>
						<input type="text" name="email" placeholder="Quem é o cliente final?">
					</div>
					<div class="item">
						<label for="sobre">Sobre o Job</label>
						<textarea name="sobre" placeholder="O que você pode me falar sobre este job?"></textarea>
					</div>
					<div class="enviar">
						<input type="submit" value="Enviar Formulário">
					</div>
				</form>
			</div>
		</div>
		<!-- Javascript -->
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
			function supportsSVG() {
			  return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;  
			}
			if (!supportsSVG()) {
			  var imgs = document.getElementsByTagName('img');
			  var dotSVG = /.*\.svg$/;
			  for (var i = 0; i != imgs.length; ++i) {
				if(imgs[i].src.match(dotSVG)) {
				  imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
				}
			  }
			}
		</script>
	</body>
</html>