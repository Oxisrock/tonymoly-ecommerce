<section class="container-cart">

  <div class="container">
    <div class="main2">
      <?php if ( wc_get_page_id( 'shop' ) <= 0 ) : ?>
        <div class="col-md-12">
          Carrito esta vacio
        </div>
      <?php else : ?>
        <!-- <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post"> -->
          <?php
          foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
              $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
              ?>

              
              <div class="item2" style="height: 100%;">
                <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                  <td class="product-thumbnail">
                    <?php
                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                    if ( ! $product_permalink ) {
                      echo wp_kses_post( $thumbnail );
                    } else {
                      printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), wp_kses_post( $thumbnail ) );
                    }
                    ?>
                  </td>
                  <p style="margin: 2rem 0;">Envio Naciones y Internacionales</p>
                </div> <!-- Aqui termina otro -->


                <div class="item2" style="height: 100%;">
                  <p class="stiletos09">
                    <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                      <?php
                      if ( ! $product_permalink ) {
                        ?>
                        <?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' ); ?>
                        <?php
                      } else {
                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                      }

                      do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                  // Meta data.
                  echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                  // Backorder notification.
                  if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
                  }
                  ?>
                </td>
              </p>
              <p class="stiletos09">
                <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                  <?php
                  echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                  ?>
                </td>
              </p>
            </div><!-- Aqui hay uno -->


            <div class="">
              <div class="item2 " style="height: 100%;"> <!-- Cantidad -->
                <div class=""><p>Cantidad</p></div>
                <td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                  <?php
                  if ( $_product->is_sold_individually() ) {
                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" style="width: 50%;" />', $cart_item_key );
                  } else {
                    $product_quantity = woocommerce_quantity_input( array(
                      'input_name'   => "cart[{$cart_item_key}][qty]",
                      'input_value'  => $cart_item['quantity'],
                      'max_value'    => $_product->get_max_purchase_quantity(),
                      'min_value'    => '0',
                      'product_name' => $_product->get_name(),
                    ), $_product, false );
                  }

              echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
              ?>
              <div class="">
                <button class="boton-cart">
                  <td class="product-remove">
                    <?php
                // @codingStandardsIgnoreLine
                    echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                      '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                      esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                      __( 'Remove this item', 'woocommerce' ),
                      esc_attr( $product_id ),
                      esc_attr( $_product->get_sku() )
                    ), $cart_item_key );
                    ?>
                  </td>
                </button>
              </div> 
            </td>
          </div>
        </div>
      </tr>

      <div class="">
        <div class="item2 " style="height: 100%;"><!--  Resumen del pedido -->
          <div class="fondo-cart02">
            <div class="text-center">
              <div class="separacion-cart">
                <p class="stiletos05">Resumen de Pedido</p>
                <p><span style="padding-right: 9rem;">Sub Total</span> <strong><?php wc_cart_totals_subtotal_html(); ?></strong></p>
                <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
                  <p><span style="padding-right: 12rem;">Envio</span> <strong><?php wc_cart_totals_shipping_html(); ?></strong></p>
                <?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

                  <tr class="shipping">
                    <th><?php _e( 'Calcular', 'woocommerce' ); ?></th>
                    <td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
                  </tr>
                  <div class="link-forma">
                    <th><a href=""><?php _e( 'shipping', 'woocommerce' ); ?></a></th>
                    <td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
                  </div>
                <?php endif; ?>
                <p><span style="padding-right: 12rem;">Total</span> <strong><?php wc_cart_totals_order_total_html(); ?></strong></p>
                <a href="<?php echo esc_url( wc_get_checkout_url() );?>"><button type="button" class="btn btn-default text-center" style="margin: 4rem 2rem; color: #fff!important; font-weight: bold;">Procesar Compra</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
  }
  ?>
  <!-- <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button> -->
</div>

    <!-- <div class="col-md-3 col-xs-12 margen-responsivo02" style="display: inline; padding-top: 13rem;">
    <div class="col-xs-4"><p style="margin: 1.5rem 0;">Cantidad</p></div>
    <div class="col-xs-4"><p class="fondo-cart023">1</p></div>
    <div class="col-xs-4"><button class="boton-cart">X</button></div>
  </div> -->


<?php endif; ?>
</div>
</div>
</section>
