<!-- slider -->
<?php get_template_part('partials/blog/header-blog'); ?>
<!-- slider -->
<?php if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<!-- slider -->
<?php get_template_part('partials/blog/content-blog'); ?>
<!-- slider -->
<?php get_footer(); ?>
