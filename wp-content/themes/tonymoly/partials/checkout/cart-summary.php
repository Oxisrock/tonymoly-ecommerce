<div class="col-md-12 col-xs-12">
  <div class="checkout-summary">
    <button class="boton-formulario">Finalizar Compra</button>
    <hr class="sidebar-pago">
    <p>Sub total <span class="text-precio"><?php wc_cart_totals_subtotal_html(); ?></span></p>
    <hr class="sidebar-pago">
    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
      <p><span style="padding-right: 12rem;">Envia</span> <strong><?php wc_cart_totals_shipping_html(); ?></strong></p>
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
    <!-- <hr class="sidebar-pago">
    <div class="link-forma">
      <a href="">Calcular Envio</a>
    </div> -->
    <!-- <hr class="sidebar-pago">
      <p>LM Suma millas</p> -->
      <!-- <hr class="sidebar-pago"> -->
      <!-- <p>1 pago de <span class="text-precio">$3.399.600</span></p> -->
      <hr class="sidebar-pago">
      <div>
        <p>TOTAL <span class="text-precio"><?php wc_cart_totals_order_total_html(); ?></span></p>
        <button class="boton-formulario">Finalizar Compra</button>
      </div>
    </div>
  </div>
