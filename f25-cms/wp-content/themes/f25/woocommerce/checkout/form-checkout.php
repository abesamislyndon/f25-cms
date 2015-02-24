<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );
// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}
// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>
   <div class = "container">
   	<div class="row">
       <div class = "project-container">
         <form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">
       	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>
		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
		     <div class="col-sm-6 col">
		     	<div class="left-checkout">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>		     		
		     	</div><!--end of left-checkout-->
			 </div>

			<div class="col-sm-6 col">
				<div class="right-checout">
				<h3 id="order_review_heading"><?php _e( 'Your Enquiry', 'woocommerce' ); ?></h3>
                <?php endif; ?>
             	<?php do_action( 'woocommerce_checkout_order_review' ); ?>	
				</div><!--end of right-checkout-->
			</div>
       </form>
      <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
    </div><!--end of project-container-->	
   </div>
</div>