<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name:PAGE-PROJECTS
*/
?>
<?php get_header(); ?>
<div class = "container">
  <div class = "project-container">
    <div class="notice1">
      <?php do_action( 'woocommerce_before_shop_loop' ); ?>
    </div>

<?php 
$args=array(
'post_type' => 'product',
'orderby' => "category",
'order' => ASC,
'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
echo '' . $type .'';
$i = 0;
while ($my_query->have_posts()): $my_query->the_post(); ?>
<?php 
	if ($i%2== 0):
  ?>

    <div class="row">        
    	<div class="col-sm-6 col">	
             <div class = "content-quote">
              <div class = "center-content1">
                      <div class="project-content-column1">
                         <a href="<?php the_permalink(); ?>"><h3> <?php the_title(); ?></h3></a>
                          <ul class = "li">
	                        <li>PROJECT COST:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'project cost', true ); ?></strong></li>
	                        <li>COUNTRY:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'country', true ); ?></strong></li>
	                        <li>YEAR:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></strong></li>
	                     </ul>
                         <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                 		 <div id="tail2"></div>
                   		 <a href="<?php the_permalink(); ?>" class="view">details</a>
                         </div>
                     </div>
                   </div>
               </div>

      
           <div class="col-sm-6 col">
           	 		 <div id="tail3"></div>
            <div class = "photo wow bounceInUp">
               	<a href="<?php the_permalink(); ?>"><?php do_action( 'woocommerce_before_shop_loop_item_title' );?></a>
           </div> 
         </div>
    </div>
 

  <hr class= "hr">  
   
<?php else: ?>

    <div class="row">  
      <div class="col-sm-6 col">
                  <div data-wow-delay="0.5s"  class = "photo wow bounceInUp">
               	<a href="<?php the_permalink(); ?>"><?php do_action( 'woocommerce_before_shop_loop_item_title' );?></a>
           </div> 
         </div>     
    	<div class="col-sm-6 col">
    			 <div id="tail4"></div>
              <div class = "center-content1">
                      <div class="project-content-column1">
                         <a href="<?php the_permalink(); ?>"><h3> <?php the_title(); ?></h3></a>
                          <ul class = "li">
	                        <li>PROJECT COST:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'project cost', true ); ?></strong></li>
	                        <li>COUNTRY:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'country', true ); ?></strong></li>
	                        <li>YEAR:&nbsp;&nbsp;<strong class = "sub-details"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></strong></li>
	                     </ul>
                     <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                 		 <div id="tail2"></div>
                   		 <a href="<?php the_permalink(); ?>" class="view">details</a>
                         </div>
                   </div>
               </div>

    </div>
      <hr class= "hr">  
   
<?php endif; ?>
<?php $i++;?>
<?php
endwhile;
} //if ($my_query)
wp_reset_query(); // Restore global post data stomped by the_post().


?>
  </div>
</div> <!--end of container--> 
<?php get_footer();?>