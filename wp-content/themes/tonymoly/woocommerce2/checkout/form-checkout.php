<?php
/**
* Checkout Form
*
* This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see 	    https://docs.woocommerce.com/document/template-structure/
* @author 		WooThemes
* @package 	WooCommerce/Templates
* @version     2.3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-md-8">
				<div id="accordion">
					<div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<div class="">
							<h3 class="stiletos10"><i class="fa fa-file" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem;"></i> Direccion de Facturación <span class="fa fa-chevron-down" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem; float:right;"></span></h3>
						</div>
						<p class="separacion-general05">Elige una direccion de Envio a Domicilio</p>
					</div>
					<div id="collapseOne" class="collapse in active" aria-labelledby="headingOne" data-parent="#accordion">
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
					</div>
					<div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<h3 class="stiletos10"><i class="fa fa-truck" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem;"></i> Direccion de Envio<span class="fa fa-chevron-down" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem; float:right;"></span></h3>
						<p class="separacion-general05">Elige una direccion de Envio a Domicilio</p>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
					<div data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
						<h3 class="stiletos10"><i class="fa fa-credit-card" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem;"></i> Metodos de Pago<span class="fa fa-chevron-down" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem; float:right;"></span></h3>
						<p class="separacion-general05">Elige el metodo de pago de tu preferencia</p>
					</div>
					<div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</li>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<?php get_template_part('partials/checkout/cart-summary'); ?>
		</div>
	</div>

	<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

<?php endif; ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
