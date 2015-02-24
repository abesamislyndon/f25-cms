<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>
<div class="breandcrumb breadcurmb-bg-archive"></div>
     <div class = "container">
	   <div class = "project-container">
	       <?php do_action( 'woocommerce_before_main_content' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
	        <div class="row single-project-view">   
              <div class="col-sm-6 col">
               <div class = "photo2">
               	<a href="<?php the_permalink(); ?>" rel = "lightbox"><?php do_action( 'woocommerce_before_shop_loop_item_title' );?></a>
				           <ul class = "single-details">
	                        <li><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;PROJECT COST:&nbsp;&nbsp;<strong class = "sub-details1"><?php echo get_post_meta( get_the_ID(), 'project cost', true ); ?></strong></li>
	                        <li><span class="glyphicon glyphicon-flag"></span>&nbsp;&nbsp;&nbsp;COUNTRY:&nbsp;&nbsp;<strong class = "sub-details1"><?php echo get_post_meta( get_the_ID(), 'country', true ); ?></strong></li>
	                        <li><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;YEAR:&nbsp;&nbsp;<strong class = "sub-details1"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></strong></li>
	                </ul>
              </div> 
             </div>
    	   <div class="col-sm-6 col">	
             <div class = "content-quote">
              <div class = "center-content2">
                      <div class="project-content-column2">
                        <p>Project Description</p>	
                         <a href="<?php the_permalink(); ?>"><h3> <?php the_title(); ?></h3></a>
                          <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
                     
                         <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                 		 <div id="tail2"></div>
                       </div>
                     </div>
                   </div>
              </div>     
            </div>
         <?php endwhile; // end of the loop. ?>
       <?php do_action( 'woocommerce_after_main_content' ); ?>	
	</div><!--end of project-container-->  
  </div>
</div>
	
<?php get_footer( 'shop' ); ?>