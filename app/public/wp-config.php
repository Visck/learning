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
define( 'AUTH_KEY',          '%M$IG*IB;0<!VAZU@B</LAXMruBe=S> s3cx1~8l9,=1i~wl8A??~J_ :k9(e~t@' );
define( 'SECURE_AUTH_KEY',   'AxcM6?dG5@}ymKO[ir(COut(nUV=Uc`(ZFN4JiBrk:>S,ns7RhdC?tdHcdq)YWT,' );
define( 'LOGGED_IN_KEY',     'XgM-L;k*(o|`G*(XRI~2*a>24EeOB}r7*=[z9cpaT-h(~GPMxUnM%#J4FIz$Y0h5' );
define( 'NONCE_KEY',         '37ND1[FH=vX[%Ch`[D?rvvOgvzD]*~~SSyQlz- F`|5I<L`_r:G#U[c*3MI8-8p=' );
define( 'AUTH_SALT',         'it@ujgDtNl=qLMfFi3=Cc0[=HAb*} Fd7P#VrRix-c!%!kW1`NffxVv/{Ho-7c`?' );
define( 'SECURE_AUTH_SALT',  'lSkQaiw>0AyX ovJsU|Zmk[YXW+R/,T!D!yyoZ8WDKBr4dm&-j@!2Hg? 1Nj_{F ' );
define( 'LOGGED_IN_SALT',    'qfgqB+H#nmjs}j}cm8!@k!=~Wm@_Yc^m`a!cD2(BbPvWVhr1%y|85W&c7.}anO~7' );
define( 'NONCE_SALT',        '>Snb?1CGzPYLWLtz1C#<3u7@57?h7t|yv.`.XNt&.H^0|Se<e{[&/&}&;g$R-n1}' );
define( 'WP_CACHE_KEY_SALT', 'f)c{u.j8#N8$|9z}Bm|Yzk}sc<DGtDb06*+E:_+|5l 1_B[tVl#`T|yaHD`Swa9.' );


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
