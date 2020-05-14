<!-- Baner de Favoritos -->
  <section class="mt-4">
  <div class="container-full">

    <div class="container">
      <div class="row">
        <div class="col-8">
            <h2 class="text-left">Categorias populares</h2>
        </div>
        <div class="col-4">
            <a class="text-right" style="float: right; font-size: 1.2rem;" href="http://tonymoly.test/categorias/" rel="noopener noreferrer">Ver Todos</a>
        </div>
      </div>
    <div class="">
          <div id="favoritos-slide" class="">
            <?php 
              $args = [
                'taxonomy'   => "product_cat",
                'number'     => 6,
                'hide_empty' => true,
              ];
            $product_categories = get_terms($args);
            ?>
            <?php foreach($product_categories as $cat) :?>
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
            <?php endforeach;?>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
<!-- Baner de Favoritos -->
