<!DOCTYPE html>
<html lang="es-ES">

<head>
	<meta charset=	"<?php bloginfo( 'charset' ); ?>">
	<title> <?php wp_title(); ?> </title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=100%,initial-scale=1, maximum-scale=1">
  
  <link rel="alternate" href="http://rduque.com" hreflang="es-es" />

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!--	<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/styles.css" />
	 
	-->
	<link rel="pingback" href="<?php // bloginfo( 'pingback_url' ); ?>" />

	<!-- recaptcha para contact Form 7 --> 
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<script type="application/ld+json">
		{
				"@context":"http://schema.org",
				"@type":"NewsArticle",
				"datePublished":"<?php the_time('Y/m/d') ?>",
				"dateModified":"<?php the_modified_date('Y/m/d'); ?>",
			  "headline":"<?php wp_title(); ?>",
			  "name":"<?php wp_title(); ?>",
				"mainEntityOfPage":"<?php the_permalink(); ?>",
				"image":{
				  "@type":"ImageObject",
				  "url":"<?php the_post_thumbnail_url('post-thumbnail') ?>"
				},
				"author":{
				  "@type":"Person",
				  "name":"Raúl Duque Montánez",
				  "url":"http://rduque.com"
				},
				"creator":{
					"@type":"Thing",
					"name":"Raúl Duque Montánez"
				},
				"publisher":{
					"@type":"Organization",
					"name":"rDuque.com",
					"url":"http://rduque.com/",
					"logo":{
						"@type":"ImageObject",
						"url":"http://rduque.com/wp-content/uploads/2017/11/logo.jpg"
					}
				}
			}
	</script>


	<?php wp_head(); ?>

	<style type="text/css">

		html, body {
			max-height: 100vh;
			width: 			100%;
			overflow:		hidden;
			margin-top:	0px!important;
			padding-top:	0px!important;
		}
		
	</style>

</head>
<body>

	<!-- Analytics -->
	<?php include_once("includes/analyticstracking.php") ?>
	<!-- -->

	<?php 
	// Servicios a 3 columnas
	include 'includes/rd_servicios-3D.php';
	?>



	<!-- Includes de terceros -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rd_3D-services.js"></script>

</body>
</html>


