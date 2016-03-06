<footer>
	<div class="wrapper">
		<div class="widgets">
	    	<?php dynamic_sidebar('footer-widget-area') ?>
	    </div>
	</div>

	<?php wp_nav_menu(array(
	'theme_location' => 'social'
	)); ?>

	<div class="gallery">
	  <div class="gallery-cell">
	  	<img src=" <?php bloginfo('template_directory') ?>/images/books-hanging.jpg" alt="">
	  </div>
	  <div class="gallery-cell">
	  	<img src=" <?php bloginfo('template_directory') ?>/images/stacks.jpg" alt="">
	  </div>
	  <div class="gallery-cell">
	  	<img src=" <?php bloginfo('template_directory') ?>/images/book-stack.jpg" alt="">
	  </div>
	  <div class="gallery-cell">
	  	<img src=" <?php bloginfo('template_directory') ?>/images/book-tats.jpg" alt="">
	  </div>
	  <div class="gallery-cell">
	  	<img src=" <?php bloginfo('template_directory') ?>/images/library.jpg" alt="">
	  </div>
	  <div class="gallery-cell">
	  	<img src=" <?php bloginfo('template_directory') ?>/images/page.jpg" alt="">
	  </div>
	</div>
    
    <p>&copy; <?php echo date('Y'); ?> | Coded by <a href="http://laurendavid.ca">Lauren David</a></p>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>