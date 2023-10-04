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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '1jf$jN?&19aq9s!hzlD3+4yv$e[q}N|.d>PMe}s_0IjLfiyk;YFi+`+ZWF!n<E?;' );
define( 'SECURE_AUTH_KEY',  'Q#(;ACbDFBQ})ir(2,kc$W]DB-$?pOb]#9mik,/h#9)7vxcFBr9R_&bc<Ld aCDf' );
define( 'LOGGED_IN_KEY',    'gLG1MAi}wDv?kZqJ90w!36hbW:aUE7&szpAS_.ArzIqGn>^-F}`KPJ~XWRe1Ndx!' );
define( 'NONCE_KEY',        'H$z3yK`e3tbr4xr1Asp7}V%Z]+TLQslQ%]Qq:LA$RHnD-lHzc*[pt:0MlO2.3cm7' );
define( 'AUTH_SALT',        'vlY9-JnaW!dB-fs.X^cFv4Pm}qF6Da>r&M5D%o|3q_5_7B:QXSZFav}XgwmTU`,k' );
define( 'SECURE_AUTH_SALT', '~,CVUJ]Kz!vY-KkFvZT/h@6wU!p p 1v;4AdVD@-!~7&NoxJJ+=G08eLLg&LgMx*' );
define( 'LOGGED_IN_SALT',   '<f,OghJ)aef$D3}8r}n7k4>%MEO4f7O4fIL_4w3232_q%^0{j>FZ-l<J`D+y-o]i' );
define( 'NONCE_SALT',       '6(,@BIojC*-pV#@!lGlamw >f]!$pL79g9npbUr!p^`b/cd&}VSXc|I.!2h}8eD{' );
define( 'FS_METHOD', 'direct' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

