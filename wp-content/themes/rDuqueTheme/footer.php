<footer class="rd_footer-layout container text-center">
	<nav>
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'inferior',
				'menu_class' => 'list-inline',
			) ); 
		?>
	</nav>

		
	<p class="text-center"><small><?php bloginfo('name'); ?> © <?php echo date("Y") ?></small></p>

</footer>


<?php wp_footer(); ?>

	<!-- Includes de terceros -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rd_3D-services.js"></script>


  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/css-galaxy.js"></script>

  <?php include 'includes/facebookSDK.php' ?>

</body>
</html>
