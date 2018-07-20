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
define('AUTH_KEY', 'O-4s[sf)uh]yV!dKWj^ jP=^O8&:vR4L!)Qix#X@(zgdJQQQUcq^r_4iX+jlbUln');
define('SECURE_AUTH_KEY', '#dOij{cd)bog@FLr]EXs8]|~zhzClu/B74![pax*XBuw$-Z?wAHKT68/0piVK6g2');
define('LOGGED_IN_KEY', 'jVS4Dg+$ vZmh|v=$qv1(f+F{`Mu3yac%Yc42OsC#)Al;Pi0n*AR:t{ZS?o]j`Y_');
define('NONCE_KEY', '1ju8#<TnxQq*R1^>3%F*pU-=%mp#l)WVS.xG8O}G;j$=_<C>Mz6#ZV.T7,g%TO9S');
define('AUTH_SALT', 'JSv@b7*,q? M%7#ybbDL}cs=Pw:7?GWe<27W/Fi^^Qa 6@g;Ru$>lk[r3!zY,s5&');
define('SECURE_AUTH_SALT', '1GM$krb%w;r%Oo~L(68I&M.+8:q})>4Ae[F- {QQu+UR:<gfi*>vvb6y#Wk zY3e');
define('LOGGED_IN_SALT', 'Vp8g} _WhuB*h0YF6vvLgB0(p+NJai$Bna^2lD?TwT-y$M%99)7d_C.qy>&#7a$p');
define('NONCE_SALT', 'dBg4ck9*u$wf#[g$P6E|GAOAp=PntS4pj/HIV3@k{47k))260UsT5NLU4g+!MO~t');

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


