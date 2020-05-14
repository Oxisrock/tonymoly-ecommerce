<?php global $product; ?>
<section class="separacion-genera02 bloquear">
  <div class="container">

    <div class="main">
      <div class="item" style="height: 100%;">

        <h1 class="stiletos07 separacion-general04">Descripción</h1>
        <p class="fuente-pequeña text-justify "><?php the_excerpt(); ?></p>

        <h2 class="stiletos07 separacion-general05">Más Imagenes</h2>
        <div class="product_gallery slider-nav">
          <?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
          $url = wp_get_attachment_url( $post_thumbnail_id);
          ?>
          <img src="<?php echo $url; ?>" class="img-responsive" alt="">
          <?php $attachment_ids = $product->get_gallery_image_ids();

          if ( $attachment_ids && has_post_thumbnail() ) {
            foreach ( $attachment_ids as $attachment_id ) {

              ?>
              <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" class="img-responsive" alt="">

              <?php
            }
          }
          ?>
        </div>
      </div>
      <?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
      $url = wp_get_attachment_url( $post_thumbnail_id);
      ?>
      <div class="item" style="height: 100%;">
        <div id="" class="slider-for">
          <img src="<?php echo $url; ?>" class="img-responsive" alt="">
          <?php $attachment_ids = $product->get_gallery_image_ids();

          if ( $attachment_ids && has_post_thumbnail() ) {
            foreach ( $attachment_ids as $attachment_id ) {
              ?>
              <!-- slider -->
              <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" class="img-responsive" alt="">
              <?php
            }
          }
          ?>
          <!-- slider -->
        </div>
      </div>
      <div class="item" style="height: 100%;">
        <span class="stiletos01"><?php echo wc_get_product_category_list($product->get_id()); ?></span>
        <p class="stiletos04"><?php the_title(); ?></p>
        <span class="stiletos01"><?php echo $product->get_price_html(); ?></span>
        <p class="stiletos05">color</p>
        <a href=""><div class="cuadro text-center"><span>i</span></div></a>
        <p class="stiletos05">Seleciona tu talla</p>
        <div class="contenedor-cuadritos" style="display: flex;">
          <div class="cuadro02">6</div>
          <div class="cuadro02">7</div>
          <div class="cuadro02">8</div>
          <div class="cuadro02">9</div>
        </div>
        <div class="separacion-top">
          <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
            <input type="number" class="input-text qty text" style="width: 20%;" name="quantity" value="1" pattern="[0-9]*" inputmode="numeric" size="2" step="1" min="1" max>
            <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button btn btn-default" style="color:#fff;">Añadir al Carrito</button>
          </form>
        </div>
      </div>
    </div>     
  </div>
</section>
<!-- Descripcion del producto -->
