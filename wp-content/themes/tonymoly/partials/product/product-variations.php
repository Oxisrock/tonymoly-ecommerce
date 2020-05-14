Selecciona el color
<?php 
$product = new WC_Product($post->ID);
array_shift( wc_get_product_terms( $product->get_ID(), 'pa_koostis', array( 'fields' => 'names' ) ) );