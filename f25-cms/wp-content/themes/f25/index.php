<?php get_header(); ?>
 
 <div class="jumbotron header-bg">
    <div class="container">
      	 <img src="<?php echo bloginfo('template_url')?>/img/photo/center-logo.png" class = "center-logo span3 wow rollIn center" alt="">
         <div class = "tagline">
			<p>We  Specialize in Interior design,<br>custom made furniture and A & A Construction</p>			      		
      	</div><!--end of tagline-->
      </div><!--end of container-->
   </div><!--end of header-->
	
	<div class = "container">
	  	<div class = "row">
	  		<div class = "col-sm-6">
	  			<div class = "up-box">
	  				<h4>WHO WE ARE</h4>
	  				  <div id="tail1"></div>
				  	  <?php $id =2; $page_data = get_page($id);?>
                      <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
				 </div><!--up-box-->
	  		 </div>
           <?php echo do_shortcode('[featured_products per_page="2" columns="1" orderby="date" order="desc"]');?>  
     </div>
   </div><!--end of row-->
</div> <!--end of container--> 
<?php get_footer(); ?>
