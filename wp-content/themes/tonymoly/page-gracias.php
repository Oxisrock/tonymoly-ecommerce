<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<section class="container"> <!-- Muchas Gracias por su Compra -->
	<div class="text-center">
		<a href=""><img src="<?php bloginfo('template_url') ?>/assets/img/logo-01.svg" class="" style="display: inline;" width="200px" alt=""></a>
		<h1 class="stiletos11">Muchas gracias por su compra<br> <hr style="width: 20%;"></h1>
		<a href="<?php echo get_field('url'); ?>" style="color: #fff; font-size: 1.5rem;" class="btn btn-default">VOLVER AL INICIO</a>
	</div>	
</section>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>