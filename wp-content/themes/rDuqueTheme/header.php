<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=	"<?php bloginfo( 'charset' ); ?>">
	<title> <?php wp_title(); ?> </title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	
	<!--
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	-->
	


	<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/styles.css" />
	 
	<link rel="pingback" href="<?php // bloginfo( 'pingback_url' ); ?>" />

	<!-- recaptcha para contact Form 7 --> 
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<?php wp_head(); ?>

	<!-- smartlook.com sirve para grabar comportamiento de los usuarios -->
	<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', 'd01698d15e0ea3c85ed48aaf5acf6216c09ecd86');
	</script>
	<!-- fin smartlook.com -->

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1013844975360537');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1013844975360537&ev=PageView&noscript=1"
	/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->

</head>
<body>

	<!-- Analytics -->
	<?php include_once("includes/analyticstracking.php") ?>
	<!-- -->

	<header>

		<nav class="navbar navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="<?php echo get_home_url() ?>">rDuque</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		    <?php 
					wp_nav_menu( array( 
						'theme_location' => 'principal',
						'menu_class' => 'navbar-nav mr-auto',
						'container' => '',
						'container_class' => ''
					) ); 
				?>

		    <!--
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo get_home_url() ?>">Inicio <span class="sr-only">Actual</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Asesoría web 360º</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Marca Personal</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Formación Desarrollo Web</a>
			      </li>
			    </ul>
		  	-->

		  </div>
		</nav>

	</header>
