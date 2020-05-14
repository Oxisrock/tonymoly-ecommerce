<!-- Nuevos Productos -->
<section class="separacion-genera02">
  <div class="container-fluid">
  <div class="row">
        <div class="col-8">
            <h2 class="text-left">Productos Mas Vendido</h2>
        </div>
        <div class="col-4">
            <a class="text-right" style="float: right; font-size: 1.2rem;" href="http://" target="_blank" rel="noopener noreferrer">Ver Todos</a>
        </div>
      </div>
      <div id="products-slide">
      <?php $argsBanner = array(
        'post_type' => 'product',
        'showposts' => 12,
      );
      global $product;
      $Banners = new WP_Query($argsBanner); ?>
      <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
        <?php 
        global $product;
        $url = get_the_post_thumbnail_url($Banners->ID,'medium');
        //$cat_id = $Banners->get_category_ids()[0];
       // $category = get_the_terms($cat_id,'product_cat');
        ?>
         <div class="shadow-box mb-5 bg-white rounded">
          <div class="card">
            <div style="background-image:url(<?= $url; ?>);" class="img-fluid img-card-product">
              <a href="" class="add_cart"><img src="<?php bloginfo('template_url') ?>/assets/svg/bag.svg" class="bag-cart" alt=""></a>
              <a href="" class="add_whishlist"><i class="far fa-heart heart-product"></i></a>
            </div>
            <div class="card-body text-center">
              <!--<a href="<?php $category; ?>" class="cat-product"><?= $category[0]->name; ?></a>-->              <br>
              <a href="<?php the_permalink(); ?>" class="title-product"><?php the_title(); ?></a>
              <br>
              <p class="price-product"><?= $product->get_price_html(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Nuevos Productos -->
