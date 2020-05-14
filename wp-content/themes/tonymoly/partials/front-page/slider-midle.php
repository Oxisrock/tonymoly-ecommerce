<!-- slider -->
<section class="mt-4">
<div class="container-fluid">
<div class="col-12">
    <div id="home-slide-midle">
      <?php $argsBanner = array(
        'post_type' => 'banner',
        'showposts' => 6,

      );
      $Banners = new WP_Query($argsBanner); ?>
      <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
        <div class="imagen-slick img-responsive" id="" style="background-image:url(<?=get_field('desktop');?>);">
          <div class="texto-slick " id="texto01">
            <a href="<?php echo get_field('url'); ?>" class="btn btn-default btn-pink">Comprar <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      <?php endwhile; endif;  ?>
    </div>
  </div>
  </div>
  </div>
</section>
<!-- slider -->
