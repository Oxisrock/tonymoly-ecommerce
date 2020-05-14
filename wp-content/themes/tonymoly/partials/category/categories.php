<!-- Baner de Favoritos -->
<section class="mt-4">
    <div class="container">
     
    <div class="">
          <div id="" class="row">
            <?php 
              $args = [
                'taxonomy'   => "product_cat",
                'showposts'     => -1,
                'hide_empty' => true,
              ];
            $product_categories = get_terms($args);
            ?>
            <?php foreach($product_categories as $cat) :?>
            <div class="col-4">
              <div class="shadow-box mb-5 bg-white rounded">
                <div class="card">
                <?php $link = get_term_link( $cat->term_id, 'product_cat' );?>
                  <a href="<?=$link;?>">
                    <?php $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                    $image = wp_get_attachment_url( $thumbnail_id ); ?>
                    <img class="card-img-top img-fluid" src="<?=$image;?>" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text"><?= $cat->name; ?></p>
                    </div>
                  </a>
                </div>
              </div>
              </div>
            <?php endforeach;?>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Baner de Favoritos -->
