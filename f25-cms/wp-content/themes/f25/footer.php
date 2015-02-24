 <footer>
   <div class="jumbotron footer-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			  <div class = "find-here">
          <h4>FIND US HERE</h4>
          <p>Furnishing 25 Pte Ltd <br> 
          205 Kranji Road, Singapore 739482 <br>
          TEL  - 6364 3833</p>
				</div>
			</div>
			<div class="col-sm-4">
			<div class = "find-here">
					<h4>FOLLOW US HERE</h4>
             <ul>
            <li><img src="<?php bloginfo('template_url');?>/img/photo/fb.png" alt=""></li>
            <li><img src="<?php bloginfo('template_url');?>/img/photo/gplus.png" alt=""></li>
          </ul>
				</div>
			</div>
			<div class="col-sm-4">
      <div class = "find-here">
	         <h4>CERTIFICATION</h4>
           <img src="<?php bloginfo('template_url');?>/img/photo/cert.png" alt="">
           <p>© Furnishing 25 Pte Ltd  2014. All rights reserved</p>
				</div>
			 </div>
	  	</div>
	  </div>
	</div>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/js/bootstrap.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/js/npm.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/js/main.js"></script> <!-- Resource jQuery -->
  <script src="<?php echo bloginfo('template_url');?>/js/wow.js"></script> <!-- Resource jQuery -->

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  
  <?php wp_footer(); ?>	
</body>
</html>