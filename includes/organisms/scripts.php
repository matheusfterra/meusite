<script src="<?php bloginfo('template_url');?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/bower_components/wow/dist/wow.min.js"></script>
<script src="<?php bloginfo('template_url');?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<script>
	$(function(){
		$('.toggle').click(function(){
			$('.layout').toggleClass('ativo')
			$('.menu-responsivo').toggleClass('ativo')
			$(this).toggleClass('ativo');
		});
		new WOW().init();
	});
	</script>
