<section class="sobre">
			<div class="container">
				<div class="itens">
					<div class="imagem wow rotateInDownLeft" data-wow-duration="0.5s" data-wow-delay="2.5s">
						<img src="<?php bloginfo('template_url');?>/images/imagem-bola.png" alt="Foto TAG">
					</div>

					<div class="icone-graduacao">
						<i class="fa fa-graduation-cap"></i>
					</div>

					<div class="icone-codigo">
						<i class="fa fa-code"></i>
					</div>

					<div class="icone-mouse">
						<i class="fa fa-mouse-pointer"></i>
					</div>

					<div class="icone-windows">
						<i class="fa fa-windows"></i>
					</div>

				</div><!--itens-->
				<div class="textos">
					<?php 
						the_post();
						the_content();
					?>

					<a href="#" class="botao medio"><i class="fa fa-eye"></i>  Continue Lendo!</a>
				</div><!--textos-->
			</div><!--container-->
		</section>