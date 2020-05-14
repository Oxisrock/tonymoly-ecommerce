<!-- slider -->
<section class="mt-4">
  <div class="container-fluid">
<div class="col-12">
    <div id="home-banner">
      <?php $argsBanner = array(
        'post_type' => 'banner',
        'showposts' => 6,

      );
      $Banners = new WP_Query($argsBanner); ?>
      <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
        <div class="imagen-slick img-responsive" id="" style="background-image:url(<?=get_field('desktop');?>);">
          <div class="texto-slick-white " id="texto01">
            <a href="<?php echo get_field('url'); ?>" class="btn btn-default btn-white">VER TODOS</a>
          </div>
        </div>
      <?php endwhile; endif;  ?>
    </div>
  </div>
  </div>
  </div>
</section>
<!-- slider -->
