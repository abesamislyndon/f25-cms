<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name:PAGE-CONTACT
*/
?>
<?php get_header();?>
  <div class = "container">
   	<div class="row">
       <div class = "project-container">
       	 <div class="col-sm-8 col">
       	 	<div class="left-content-checkout">
       	 	 <?php echo do_shortcode( '[contact-form-7 id="100" title="contact"]' ); ?>
       	 	 </div>
	      </div>
	      
         <div class="col-sm-4 col">
         	<div class="left-sidebar">
         		<h4>About us</h4>
         		<hr>
               <?php $id =2; $page_data = get_page($id);?>
               <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
         	</div>
          </div>
      </div>	
   </div>
</div>
<?php get_footer();?>
