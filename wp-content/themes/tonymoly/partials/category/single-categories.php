<!-- Nuevos Productos -->
<section class="separacion-genera02 mt-4">
  <div class="container">
      <div id="products-news-slide2">
      <div class="row">
      <?php if (have_posts()) : while(have_posts() ) : the_post(); ?>
        <?php 
        global $product;
        $url = get_the_post_thumbnail_url($post->id,'medium');
        //$cat_id = $loop->get_category_ids()[0];
        //$category = get_the_terms($cat_id,'product_cat');
        ?>
        <div class="col-6">
         <div class="shadow-box mb-5 bg-white rounded">
            <div class="card">
              <div style="background-image:url(<?= $url; ?>);" class="img-fluid img-card-product">
                <a href="" class="add_cart"><img src="<?php bloginfo('template_url') ?>/assets/svg/bag.svg" class="bag-cart" alt=""></a>
                <a href="" class="add_whishlist"><i class="far fa-heart heart-product"></i></a>
              </div>
              <div class="card-body text-center">
                <!--<a href="<?php $category; ?>" class="cat-product"><?= $category[0]->name; ?></a>-->
                <br>
                <a href="<?php the_permalink(); ?>" class="title-product"><?php the_title(); ?></a>
                <br>
                <p class="price-product"><?= $product->get_price_html(); ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      </div>
    </div>
  </div>
</section>
<!-- Nuevos Productos -->
