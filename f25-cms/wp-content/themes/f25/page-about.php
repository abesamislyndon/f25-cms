<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name:PAGE-ABOUT
*/
?>
<?php get_header();?>
  <div class = "container">
   	<div class="row">
       <div class = "project-container">
       	 <div class="col-sm-12 col">
       	 	<div class="left-content-checkout">
       	 	  <h4>WHO WE ARE</h4>
       	 	   <?php $id =2; $page_data = get_page($id);?>
               <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
   	           </div><!--end of left-content-checkout-->

				<div class="timeline">
							<h3>PROJECT REFERENCE</h3>
							<section id="cd-timeline" class="cd-container">
			  		        <?php
			                      $temp = $wp_query;
			                      $wp_query= null;
			                      $wp_query = new WP_Query();         
			                      $wp_query->query('showposts=20'.'&paged='.$paged.'&category_name=project reference');
			                      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								  <div class="cd-timeline-block">
								  <div class="cd-timeline-img">
								  </div> <!-- cd-timeline-img -->

								 <div  class="cd-timeline-content wow bounceInUp">
			                     <h5><?php the_title(); ?></h5>
			                          <p><?php the_excerpt(__('(more…)')); ?></p>
			                           <ul class = "about-details">
                          				 <li>PROJECT COST:&nbsp;&nbsp;<strong class = "sub-details1"><?php echo get_post_meta( get_the_ID(), 'project cost', true ); ?></strong></li>
                          				 <li>COUNTRY:&nbsp;&nbsp;<strong class = "sub-details1"><?php echo get_post_meta( get_the_ID(), 'country', true ); ?></strong></li>
                         				 <li>YEAR:&nbsp;&nbsp;<strong class = "sub-details1"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></strong></li>
                                      </ul>
			                    </div> <!-- cd-timeline-content -->
							 </div> <!-- cd-timeline-block -->
			              <?php endwhile; ?>  
						</section> <!-- cd-timeline -->
					  <br>
			    </div>
	      </div> 
      </div>	
   </div>
</div>
<?php get_footer();?>
