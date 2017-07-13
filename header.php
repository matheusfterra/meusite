<?php if($style == 'home'){ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Matheus Terra</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/geral.css">
<link rel="stylesheet" href="css/plugins.css">
<link rel="stylesheet" href="css/<?php echo $style ?>.css">	
<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">	

</head>

<body>
<?php include "includes/organisms/menu-responsivo.php"?>
<div class="layout">
	<header>
		<div class="container">
			<div class="logo wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="1s">
				<a href="index.html">
					<img src="images/logo-topo.png" alt="Logo Topo">
				</a>
			</div>
			<div class="links wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="1.5s">
				<?php include "includes/organisms/menu.php"?>
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

				<h1 class="wow swing" data-wow-duration="0.5s" data-wow-delay="2s"><?php echo $chamada;?></h1>
				<?php if($style == "home"){?>
				<p>Code // Design // Reboot</p>
				<?php }else{} ?>
		</div><!--container-->
	</header>

	<main>
<?php } else{ ?>
	
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Matheus Terra</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/geral.css">
<link rel="stylesheet" href="css/plugins.css">
<link rel="stylesheet" href="css/<?php echo $style ?>.css">	
<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">	

</head>

<body>
<?php include "includes/organisms/menu-responsivo.php"?>
<div class="layout">
	<header>
		<div class="container">
			<div class="logo">
				<a href="index.html">
					<img src="images/logo-topo.png" alt="Logo Topo">
				</a>
			</div>
			<div class="links">
				<?php include "includes/organisms/menu.php"?>
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

				<h1 class="wow swing" data-wow-duration="0.5s" data-wow-delay="2s"><?php echo $chamada;?></h1>
				
		</div><!--container-->
	</header>

	<main>
	
	<?php } ?>
	
	
