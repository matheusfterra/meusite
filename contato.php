<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Matheus Terra</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/geral.css">
<link rel="stylesheet" href="css/plugins.css">
<link rel="stylesheet" href="css/contato.css">	
<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">	

</head>

<body>
<?php include "includes/menu-responsivo.php"?>
<div class="layout">
	<header>
		<div class="container">
			<div class="logo">
				<a href="index.html">
					<img src="images/logo-topo.png" alt="Logo Topo">
				</a>
			</div>
			<div class="links">
				<nav>
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>
				<a class="toggle" href="javascript:;">
					<span></span>
					<span></span>
					<span></span>
					</a>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-git"></i></a></li>
					</ul>
			</div><!--links-->

				<h1>Fale <strong>Comigo!</strong></h1>
				<!--<p>Code // Design // Reboot</p>-->
		</div><!--container-->
	</header>

	<main>
		<section class="contato">
			<div class="container">
				<form>
					<div class="cols">
						<div class="col">
							<div class="form-group">
								<input type="text" placeholder="Nome" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="email" placeholder="E-mail" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="number" placeholder="Telefone">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<select>
									<option>Selecione uma Opção!</option>
									<option>Orçamento</option>
									<option>Sugestão</option>
									<option>Outras Informações</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea placeholder="Preencha suas Dúvidas"></textarea>
					</div>
					<div class="form-group">
						<button class="botao medio"><i class="fa fa-arrow-right"></i>Enviar Contato</button>
					</div>

					<p class="bg-success"><i class="fa fa-info-circle"></i> Seu contato foi enviado com <strong>SUCESSO</strong>!</p>
					<p class="bg-danger"><i class="fa fa-info-circle"></i> Preencha todos os campos <strong>OBRIGATÓRIOS</strong>!</p>

					<div class="textos">
						<h3>(33)3333-3333</h3>
						<h3>matheusfterra @hotmail.com</h3>
					</div>
				</form>
			</div>
		</section>
	</main>

	<footer>
		<div class="logo-rodape">
			<a href="index.html">
				<img src="images/logo-rodape.svg" alt="Logo Rodapé">
			</a>
			<p>2017 Todos os Direitos Reservados</p>

		</div>

	</footer>
</div>
<?php include "includes/scripts.php"?>

</body>
</html>
