  <div class = "container">
   	<div class="row">
       <div class = "project-container">
       	 <div class="col-sm-8 col">
       	 	<div class="left-content-checkout">
	       	 <?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
			  global $woocommerce;
	 
	    	  if ( $order ) : ?>
			  <?php if ( in_array( $order->status, array( 'failed' ) ) ) : ?>
			  <?php else : ?>
			   <h2>notice</h2>
				<ul class="order_details">
					<li><?php _e( 'Thank you. Your enquriy has been received.', 'woocommerce' ); ?></li>
					<li><?php _e( 'Enquiry:&nbsp;&nbsp;', 'woocommerce' ); ?><strong><?php echo $order->get_order_number(); ?></strong></li>
					<li><?php _e( 'Date:&nbsp;&nbsp;', 'woocommerce' ); ?><strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong></li>
			     </ul>
				<hr>
		    	<?php endif; ?>
		    	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>
     		    <?php else : ?>
			    <p><?php _e( 'Thank you. Your quotation has been received.', 'woocommerce' ); ?></p>
		        <?php endif; ?>
            </div><!--end of left-content-checkout-->
	      </div>
	      
         <div class="col-sm-4 col">
         	<div class="left-sidebar">
               <?php $id =2; $page_data = get_page($id);?>
               <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
         	</div>
          </div>
    </div>	
  </div>
</div>