<section class="sobre">
			<div class="container">
				<div class="textos">
					<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div><!--textos-->	


				
				<?php query_posts('post_type=habilidades');?>
					
					<ul class="habilidades wow flipInY" data-wow-duration="0.5s" data-wow-delay="3.5s">
					<?php if(have_posts()): while(have_posts()): the_post();?>
						<li class="habilidade-<?php the_field('nivel')?>">
							<h2>
							<style>
								.<?php the_field('icone')?>{
									<?php if(get_field('cor')):?>;
										color: <?php the_field('cor')?>;
									<?php else :?>
										color: #000;
									<?php endif ;?>
									}
							</style>
							<i class="fa <?php the_field('icone')?>"></i> <strong><?php the_title();?></strong> // <?php the_field('nivel')?>0%<div class="barra"><span></span></div></h2>
						</li>

					<?php endwhile;?>
				<?php else : ?> 
					Não há Habilidades Cadastradas...
				<?php endif;?>
					</ul>

				<?php wp_reset_query();?>
	

				<a href="#" class="botao medio"><i class="fa fa-picture-o"></i>  Acessar Portfolio</a>
			</div><!--container-->
		</section>