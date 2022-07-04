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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Suneba.github.io_db' );

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
define( 'AUTH_KEY',         'C&pklI_ 1@Eg&`V3=Adb]E%BX]kBiR%FdI{qQR7,Q8GQEwMD6UB:nB5DXglVdTrE' );
define( 'SECURE_AUTH_KEY',  'm1,s[U,Eu9rp 0t%fDv)hj7M}Kb{l`.E*kE6Y3T1XS_l>GKZa `@:YP7qJ& s`{?' );
define( 'LOGGED_IN_KEY',    'DTsbN)hsPAR`w{F0cCO<[@=B4Ky@ s@x0DxM$/iw+iLO/fI|FA:Om#eJi[:5&3k)' );
define( 'NONCE_KEY',        '*nqI5Ow3hyXGP68r$j|i>]fg8zdB(KkA4Ya(F|[`=$yfH6dOYzTc>L!.@t%c6h4T' );
define( 'AUTH_SALT',        '%tu=i~vDIcWr%7M_z$h[yT9@U:x95V4N HK4NhO,SBRQOL,H!uacSA@(`jop}&mp' );
define( 'SECURE_AUTH_SALT', '51.auVt8s]w9@>Tm!%mW(W|2=4yt{a#Hv5VE raa!`P{9;i)N8Y<$$Fp(VKSJw4*' );
define( 'LOGGED_IN_SALT',   'E^$F q(9rWoz^s)^e(H,a|RQf}Q&TJN QXiyMv4^M|K;jM_<Cpt{Fp2P/:Via[D4' );
define( 'NONCE_SALT',       '|^#<])[oX2{(VHl!`d%%&%2z0+?g]<HsKz%Q1}3CrgY>}YOTWCKb80|p]/O9V/P1' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
