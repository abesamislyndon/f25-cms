<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>

<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
<div class = "col-sm-6">
    <div class = "quote-box-container">
         <div class = "col-sm-6 ">
                <div class = "photo-column">
                 	<a href="<?php the_permalink(); ?>"><?php do_action( 'woocommerce_before_shop_loop_item_title' );?></a>
                </div>
         </div>     
          <div class = "col-sm-6 ">      
                   <div class="project-content-column">
                    	<a href="<?php the_permalink(); ?>"><h3> <?php the_title(); ?></h3></a>
                         <ul>
	                        <li>PROJECT COST:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'project cost', true ); ?></strong></li>
	                        <li>COUNTRY:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'country', true ); ?></strong></li>
	                        <li>YEAR:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></strong></li>
	                    </ul>
                    <br>
                  <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                 <div id="tail2"></div>
                   <a href="<?php the_permalink(); ?>" class="view">details</a>
                 </div>
           </div>         
    </div><!--end of quote-boc-container-->
 </div>

