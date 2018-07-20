<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=	"<?php bloginfo( 'charset' ); ?>">
	<title> <?php wp_title(); ?> </title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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

	<!-- Google Adsense -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-7839374496300658",
	    enable_page_level_ads: true
	  });
	</script>

	<?php wp_head(); ?>

</head>
<body>

	<!-- Analytics -->
	<?php include_once("includes/analyticstracking.php") ?>
	<!-- -->

	<header>

		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container">
		  	<a href="<?php echo get_home_url() ?>"><h1 class="navbar-brand">rDuque</h1></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			    <?php 
						wp_nav_menu( array( 
							'theme_location' => 'principal',
							'container' => false,
							'menu_class' => 'navbar-nav ml-auto',
						) ); 
					?>

			  </div>
			</div>
		</nav>

	</header>