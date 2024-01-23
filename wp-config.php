<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'GSiM@.@fP>[8|tRv0B:3U%!C.x&2,U0OyC=2rj&7Kb%2>soXV?!]3TSd8{J`p4A%' );
define( 'SECURE_AUTH_KEY',   'zx>Ms(i+l8dK,<2f{c$!:+i}rkAOa^([Y][u]]16!lkg66juMb?<tcq{w2Td[F{o' );
define( 'LOGGED_IN_KEY',     ';x_XcirV;<C.oL|H]x;>ps3%cOzb@ p~U IT) *kKQkXBu`#`mGBr!7cdHO%fn=e' );
define( 'NONCE_KEY',         '#t(n0$c+1CxYA86TU h~lcVuiGD]9Dne8-Bl2<=qEwkVr`x$+I6X8A{k^J~ZZ<g/' );
define( 'AUTH_SALT',         'k!+.mq/O`YU;G;)nL?|am&gJWe:.DP?4Q-+K.CLFyZ#wWE}gA}TaB>x8K@Z1:,Ln' );
define( 'SECURE_AUTH_SALT',  '!I/L:*9hF/EdspSG)jw2=#v.XxG60e$tA.j(0FkK(Ifrv3,M0?bJixJJ*4;x_@v=' );
define( 'LOGGED_IN_SALT',    'Jr#V~CIete,phWwm]T4;nOm+cj#Dr%NxamDp/HPVkX:f[1@:S-[<J@k%+@c;7%Nr' );
define( 'NONCE_SALT',        '>v%#Q<R,Zmn)aLM9}:EnE$:71dv$.pyJzwoUsO%y,r^w@sQw>e:7MdDVXKKUEJt9' );
define( 'WP_CACHE_KEY_SALT', 'ijXx&jI:c$#b&G7$;@@Kz#A5bv_Q9EctPmz1;<Dn4b@]_-InS8eH}+=u8pjYH:x@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
