
<?php if (have_posts()) : while(have_posts() ) : the_post(); ?>
<?php global $product; ?>
<?php global $attributes; ?>
<section class="separacion-genera02 mb-4 pt-4 pb-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="title-product"><?=the_title();?></h2> 
        <span class="bange">nuevo</span>
        <div class="content">
          <p class="excerpt-product"><?= get_the_excerpt();?></p>
          <span class="price-product-single"><?= $product->get_price_html(); ?></span>
          <div class="cantidad"><p>Cantidad</p></div>
            <div class="qty_button">
              <button class="menus">-</button>
              <input type="number" class="input-text qty s text" name="quantity" value="1" pattern="[0-9]*" inputmode="numeric" size="2" step="1" min="1" max>
              <button class="plus">+</button>
            </div>
          <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
              <input type="number" class="input-text qty h text" name="quantity" value="1" pattern="[0-9]*" inputmode="numeric" size="2" step="1" min="1" max hidden>
            <br>
            <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button btn btn-default" style="color:#fff;">AGREGAR AL CARRITO <?xml version="1.0" encoding="iso-8859-1"?>
              <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 511.808 511.808" style="enable-background:new 0 0 511.808 511.808;" xml:space="preserve">
              <g>
                <g>
                  <path d="M477.511,491.424l-26.48-348.832c-0.624-8.336-7.584-14.784-15.952-14.784H76.391c-8.368,0-15.328,6.448-15.952,14.8
                    l-26.704,352c-0.336,4.432,1.2,8.816,4.224,12.08c3.024,3.264,7.28,5.12,11.728,5.12h412.112c0.096,0,0.208,0,0.32,0
                    c8.832,0,16-7.168,16-16.016C478.119,494.288,477.911,492.816,477.511,491.424z M66.935,479.808l24.288-320h329.024l24.288,320
                    H66.935z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M255.735,0c-70.576,0-128,57.44-128,128.032v63.776c0,8.832,7.168,16,16,16c8.832,0,16-7.168,16-16v-63.776
                    c0-52.96,43.056-96.032,96-96.032c52.944,0,96,43.072,96,96.032v63.776c0,8.832,7.168,16,16,16c8.832,0,16-7.168,16-16v-63.776
                    C383.735,57.44,326.311,0,255.735,0z"/>
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              </svg>
              </button>
          </form>
          <div class="button-extras mt-4">
            <div class="row">
              <div class="col-6">
                <a href="" class="wishlist-product btn btn-default">WISHLIST <i class="far fa-heart"></i></a>
              </div>
              <div class="col-6">
                <a href="" class="shared-product btn btn-default">COMPARTIR <i class="fas fa-share-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>