<div class="fondo">
<div class="product_gallery">
    <?php 
    $product = wc_get_product($post->ID);
    $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
    $url = wp_get_attachment_url( $post_thumbnail_id);
    ?>
    <div class="mayor"><img src="<?= $url; ?>" class="img-fluid" alt=""></div>
    <?php 

    $attachment_ids = $product->get_gallery_image_ids();
    if ( $attachment_ids && has_post_thumbnail() ) :
        foreach ( $attachment_ids as $attachment_id ) :
        ?>
            <div class="mayor"><img src="<?= wp_get_attachment_url($attachment_id); ?>" class="img-fluid" alt=""></div>
        <?php
        endforeach;
    endif;
    ?>
</div>
<div class="share-product mb-4">
<div class="container">
    <div class="row">
        <div class="col-6">
            <a href="" style="  width: 164px;
  height: 20px;
  opacity: 0.8;
  font-family: Muli;
  font-size: 16px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.5;
  letter-spacing: normal;
  text-align: left;
  color: #1c1c1c;">Refiere y gana dinero!</a>
            <p>Haz click aqui y adquiere tu código</p>
        </div>
        <div class="col-6">
            <a href=""><i class="fab fa-whatsapp-square fa-3x"></i></a>
            <a href=""><i class="fab fa-facebook fa-3x"></i></a>
            <a href=""><i class="fab fa-twitter-square fa-3x"></i></a>
            <a href=""><i class="fab fa-pinterest fa-3x"></i></a>
        </div>
    </div>
</div>
</div>
</div>