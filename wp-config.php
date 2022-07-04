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
define( 'AUTH_KEY',         'G+([iIp!%Cs=M<A>s77;bcS! iU1@9hDBuCXi1WRY~<j(Jh#k?uAN#D)|t8BGa G' );
define( 'SECURE_AUTH_KEY',  '~;mK/jCr/4(2Okb><URaf;W.rXxKNZ;{QaRw=J=%KfzwTTaDr5,>Ur[Z~,^*5p8N' );
define( 'LOGGED_IN_KEY',    'eYadx0F%kZ[)Tl4tmHM&uBl8C$L<o`{w>;p{ E]*^W`o9G/?u?_c9qhOD$fy:n~}' );
define( 'NONCE_KEY',        'ye){OnF:$t@]+wP0k*=;jq7&S9Ma:Fk/PZ2S(G_1Ki^=w[rxI:yyz%Bsf~(293zN' );
define( 'AUTH_SALT',        'nFF!7.K_V8/EcHWEi~kKm22=mVMGai95ewZR= XD$)3ayFu^+[?}10H/9 $]YvV^' );
define( 'SECURE_AUTH_SALT', 'vm5rQ8E!l`7GX`Bu@e;lT4Of2{K1irU[JoSv{xTfQH`_jum$AEo,`/ BJUL55(59' );
define( 'LOGGED_IN_SALT',   '}5:XrxF1sJ<PDzf ls=eGoOioP64%NtF4iVB1l&GT.uxtejjP*B7/N/;`w/vehk.' );
define( 'NONCE_SALT',       'NUht`B(X^* =Lsj8nzIZWH{7M(b2SL*$%DWOm9:AQb;Ee~DAw>Gup(GWl9F>@v-q' );

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
