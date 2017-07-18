<script src="<?php bloginfo('template_url');?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/bower_components/wow/dist/wow.min.js"></script>
<?php if(is_page('portfolio') || is_singular()){?>
<script src="<?php bloginfo('template_url');?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<?php }else{};?>
<?php if(is_front_page()){?>
<script src="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick.min.js"></script>
<?php }else{};?>

<script>
	$(function(){
		$('.toggle').click(function(){
			$('.layout').toggleClass('ativo')
			$('.menu-responsivo').toggleClass('ativo')
			$(this).toggleClass('ativo');
		});
		new WOW().init();

		<?php if(is_front_page()){?>
			$('.slide').slick({
				infinite: true,
				slidesToShow: 1,
				dots: true,
				autoplay: true,
				autoplaySpeed:2000
			});
		<?php }else{}?>
	});
	</script>
