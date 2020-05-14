<?php global $product; ?>
<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<!-- slider -->
<?php get_template_part('partials/product/product-gallery'); ?>
<!-- slider -->
<!-- slider -->
<?php get_template_part('partials/product/product-description'); ?>
<!-- slider -->
<!-- slider -->
<?php get_template_part('partials/product/product-tabs'); ?>
<!-- slider -->
<!-- slider -->
<?php get_template_part('partials/product/product-use'); ?>
<!-- slider -->
<!-- slider -->
<?php get_template_part('partials/product/product-comments'); ?>
<!-- slider -->
<!-- slider -->
<?php get_template_part('partials/product/product-similar'); ?>
<!-- slider -->
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
