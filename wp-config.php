<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'rduque');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'rduque');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'RdM04848');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'n`Av6S]}[nT(gI6Xw^HtV&b)pPL>pDlz4L|ERiQ{P$T59pu-`@?_ Nx18Rcw3U+7');
define('SECURE_AUTH_KEY', 'ajYyoKe8*9,4cn(NZql7wQq[4Fxu^Jc?u]3{M:WK2wGJXy*+%,(hE`kt#]ydV f)');
define('LOGGED_IN_KEY', 'JK3dqO)ov3>K)`|)2l.tTB~LB!Hw8>Z.3Jy#mG97<Y82I-` K|~/d/zP?*u3i#6f');
define('NONCE_KEY', 'O<ZOs4%;z&@ltV6U{f8Rb$7QP=Wc,MP`60/EH83}J2;9:e(G.Nnnr!,SA$ =j_</');
define('AUTH_SALT', ')J-T|J5%Uz^5V%AxY@zhL*e`FXLsJ:XcP:HgXugnh5 O-+1<9VZJ1XCj&2`~1C6a');
define('SECURE_AUTH_SALT', '}8;4jP$j4g%G%Ghq>j9:UW^hCWST$%j$5BnA4e)ndn]OcjT2l!SHVQ<oG;:V;)b%');
define('LOGGED_IN_SALT', '9U5)vJq`b -{Tp8fNV@W)Z*n^:ur+_K6W9AAXFFnN$Kpsq4vw}CH}]AE|dn^$}uq');
define('NONCE_SALT', 'OD <@DL^e,oJnOU+}`;T:FB~|rNH2z@RAWbi^>^[o^x8wem~Qg1(;_M,Mm0?ilj3');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


