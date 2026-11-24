<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'JesusSaves7717$' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-1.c4diqgqumwgc.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '_s4jF~K++3![YF2ig7o4j_vNV!Mj&([tDKn0;A~0lz>RH34VdoD0P<uiq$C}zS@m' );
define( 'SECURE_AUTH_KEY',  'tk|N-ta8a|@zCY,R70l[Gjq#6|0cl^T#!&>!`*IeN{.#L:U#n4SYUwQ6J+H:z$l1' );
define( 'LOGGED_IN_KEY',    '|NT&pV?u;L1|G+pp;o6JN+x}:BT-jul!xjU;vy  ^/RVCk)R(wly>jvj]:oR-8e-' );
define( 'NONCE_KEY',        'f|>j9+;91-2ln}B.ECGuVnO.z`u|Qd|Wzu2u+)w6cK+ds2h6wY$(:W~RXpIadEaL' );
define( 'AUTH_SALT',        'DGdK-v8729J<+_x_&n_|s5}YYks!(O!|MI|0;&QK?yv!4aqtB36:FJ*+@M;.lvrt' );
define( 'SECURE_AUTH_SALT', '=r,CqN}hNLw~bZy89Wtq_pDLY9WkQ}#-qNe-+9G7=;M,8<vDBa(|UdJ S8~SLxK-' );
define( 'LOGGED_IN_SALT',   '.WHs`=:_Hb}A++-6gh+qP+]| <4DV9n[+fgQ!Kz(U`HF-ww#jYs--y+8{RH24Z`y' );
define( 'NONCE_SALT',       '2GyKQ2%q-f#3^~*Fq-bLG$BNp`QtYSnY&Y`:*}s1t9<4S#Q38.R=s;5qaJA{;g<1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
