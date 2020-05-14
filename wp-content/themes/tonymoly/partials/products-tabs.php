<!-- Galeria de productos -->
<section class="separacion-genera02">
  <div class="container">
    <div class="text-center sepracion-general">
      <div>
        <span class="stiletos01">#Stilettos</span>
      </div>
      <ul class="nav nav-tabs navbar-center separacion-galeria-tabs">
        <li class="active"><a data-toggle="tab" href="#plataformas">Plataformas</a></li>

        <li><a data-toggle="tab" href="#cerrados">Cerrados</a></li>

        <li class=""><a data-toggle="tab" href="#tacones">Tacones</a></li>

        <li><a data-toggle="tab" href="#sandalias">Sandalias</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="tab-content">

        <div id="plataformas" class="tab-pane fade in active">
          <?php $argsBanner = array(
            'post_type' => 'product',
            'showposts' => 8,
            'product_cat' => 'plataformas'
          );
          $Banners = new WP_Query($argsBanner); ?>
          <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
            <?php global $product; ?>
            <?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );
            $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>
            <div class="col-md-3 col-xs-6">
              <div class="item e6">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" class="img-responsive" alt=""></a>
                <div class="text6">
                  <a href="#"><p class="texto-centrado">Añadir al Carrito</p></a>
                </div>
              </div>
              <br>
              <span class="stiletos03"><?php echo $product->get_price_html(); ?></span>
              <p><?php the_title(); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div><!--  plataformas -->

        <div id="cerrados" class="tab-pane fade">
          <?php $argsBanner = array(
            'post_type' => 'product',
            'showposts' => 8,
            'product_cat' => 'cerrados'
          );
          $Banners = new WP_Query($argsBanner); ?>
          <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
            <?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );
            $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>
            <div class="col-md-3 col-xs-6">
              <div class="item e6">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" class="img-responsive" alt=""></a>
                <div class="text6">
                  <a href="#"><p class="texto-centrado">Añadir al Carrito</p></a>
                </div>
              </div>
              <br>
              <span class="stiletos03"><?php echo $product->get_price_html(); ?></span>
              <p><?php the_title(); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div><!--  cerrados -->

        <div id="tacones" class="tab-pane fade">
          <?php $argsBanner = array(
            'post_type' => 'product',
            'showposts' => 8,
            'product_cat' => 'tacones'
          );
          $Banners = new WP_Query($argsBanner); ?>
          <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
            <?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );
            $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>
            <div class="col-md-3 col-xs-6">
              <div class="item e6">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" class="img-responsive" alt=""></a>
                <div class="text6">
                  <a href="#"><p class="texto-centrado">Añadir al Carrito</p></a>
                </div>
              </div>
              <br>
              <span class="stiletos03"><?php echo $product->get_price_html(); ?></span>
              <p><?php the_title(); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div><!--  tacones -->

        <div id="sandalias" class="tab-pane fade">
          <?php $argsBanner = array(
            'post_type' => 'product',
            'showposts' => 8,
            'product_cat' => 'sandalias'
          );
          $Banners = new WP_Query($argsBanner); ?>
          <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>
            <?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );
            $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>
            <div class="col-md-3 col-xs-6">
              <div class="item e6">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" class="img-responsive" alt=""></a>
                <div class="text6">
                  <a href="#"><p class="texto-centrado">Añadir al Carrito</p></a>
                </div>
              </div>
              <br>
              <span class="stiletos03"><?php echo $product->get_price_html(); ?></span>
              <p><?php the_title(); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div><!--  sandalias -->

      </div><!-- ./tab-content -->
    </div><!-- row -->
  </div><!-- container -->
  </section>
  <!-- Galeria de productos -->
