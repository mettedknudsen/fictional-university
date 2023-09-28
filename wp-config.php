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
define( 'DB_NAME', 'test.db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hnF!4-U>u*d<t*IVkEFPoN&^0/9P65 uzrI(pu2Q*/1zRY3Dy0?dO/L$+Pe$$,|!' );
define( 'SECURE_AUTH_KEY',  'WMi|Ik?_#ey{omJa=6(Po$$.q3A3y!UM:;O-UxS8q*]/s|V}FKw%J6,b40a1do0l' );
define( 'LOGGED_IN_KEY',    '%;@Ga%74*x1-U[H7r5=xD*=752_*T!ipG&el)P<v#d|]#7/Lr[ ,@X{NKRbbl]&.' );
define( 'NONCE_KEY',        '`Bn*(RrDuu3j9FvJ2=Q&A@h%z`D-t1vID-Uw6u4qUkgGBXoe9KU[r#Xti]]%c>*S' );
define( 'AUTH_SALT',        '}.jPb>5KPU9;&H}1aJvtAjC(x R>wY%{~]CL&lCSx63l2asX;>ZW#%:diOfrG9 t' );
define( 'SECURE_AUTH_SALT', 'k2a/gVoPIm4<52~Ct/e7mtdwJ,TMqx/5(M&Sd@m.BrG~LcJI=TN]F0rOO5i/bZ@8' );
define( 'LOGGED_IN_SALT',   '%r37*jp-:!9cWVLiIg?+QdQ!rfx`w[1:&#g-}&`z}@5c;d%R?QEzwv:QVzACP2P^' );
define( 'NONCE_SALT',       '%Am{E1a3~!cgf^9P&NG6E57[o/{3Zyd}xWR>y[C0aK,3sFWI9wcAM.`oz;2n3k:Y' );

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
