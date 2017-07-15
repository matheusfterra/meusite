<?php if(is_front_page()){?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/geral.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/plugins.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/<?php global $style; echo $style; ?>.css">	
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/wow/css/libs/animate.css">	
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick-theme.css">	
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick.css">
</head>

<body <?php body_class();?>>
<?php include "includes/organisms/menu-responsivo.php"?>
<div class="layout">
<style>
<?php if(get_the_post_thumbnail()){ ?>
      header{
      	 background-image: url('<?php the_post_thumbnail_url();?>');
      }
  <?php }else{ ?>
  		header{
  			background-image: url('<?php bloginfo('template_url');?>/images/Slide1.jpg');
  		}  
  <?php } ?>
</style>

	<header>
		<div class="container">
			<div class="logo wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="1s">
				<a href="<?php bloginfo('url');?>">
					<img src="<?php bloginfo('template_url');?>/images/logo-topo.png" alt="Logo Topo">
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

		  <div class="slide">
			<?php 
				query_posts('post_type=slide');
				while(have_posts()) : the_post();
			?>
				<div class="item">
					<h1><?php the_title();?></h1>
					<?php the_content();?>
				</div>
			<?php 
				endwhile;
				wp_reset_query();
			?>
		</div>





		</div><!--container-->
		<?php wp_head();?>
	</header>

	<main>
<?php } else{ ?>
	
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/geral.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/plugins.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/<?php global $style; echo $style; ?>.css">	
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/wow/css/libs/animate.css">	
<?php if(is_page('portfolio')){?>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/lightbox2/dist/css/lightbox.min.css">
<?php }else{};?>
</head>

<body>
<?php include "includes/organisms/menu-responsivo.php"?>
<div class="layout">
<style>
<?php if(get_the_post_thumbnail()){ ?>
      header{
      	 background-image: url('<?php the_post_thumbnail_url();?>');
      }
  <?php }else{ ?>
  		header{
  			background-image: url('<?php bloginfo('template_url');?>/images/Slide1.jpg');
  		}  
  <?php } ?>
</style>
	<header>
		<div class="container">
			<div class="logo">
				<a href="<?php bloginfo('url');?>">
					<img src="<?php bloginfo('template_url');?>/images/logo-topo.png" alt="Logo Topo">
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

				<h1 class="wow swing" data-wow-duration="0.5s" data-wow-delay="2s"><?php the_title();?></h1>
				
		</div><!--container-->
		<?php wp_head();?>
	</header>

	<main>
	
	<?php } ?>
	
	
