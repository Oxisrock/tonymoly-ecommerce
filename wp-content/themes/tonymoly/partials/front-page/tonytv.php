<!-- Blog -->
<section class="separacion-genera02 mt-2">
  <div class="container-fluid">
  <div class="row">
        <div class="col-12">
            <h2 class="text-center title-section-tonytv mb-4">TONY.<span>TV</span></h2>
        </div>
        <!--<div class="col-4">
            <a class="text-right" style="float: right; font-size: 1.2rem;" href="http://" target="_blank" rel="noopener noreferrer">Ver Todos</a>
        </div>-->
      </div>
      <div id="tonytv" class="mt-2">
      <?php $argsBanner = [
        'post_type' => 'tonytv',
        'showposts' => 12,
        'orderby' =>'date',
        'order' => 'DESC'
      ];
      global $product;
      $loop = new WP_Query($argsBanner); ?>
      <?php if ($loop->have_posts()) : while($loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
        $url = get_the_post_thumbnail_url($loop->ID,'large');
        ?>
         <div class="shadow-box mb-5 bg-white rounded">
          <div class="card-blog">
            <div style="background-image:url(<?= $url; ?>);" class="img-fluid img-card-tonytv">
            </div>
            <div class="card-body text-center">
            <p class="date-tonytv"><?= get_the_date(); ?></p>
            <h2 class="title-tonytv"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Nuevos Productos -->
