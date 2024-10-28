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
define( 'AUTH_KEY',          'l$z!P7kLb]^s]JK_:^2n,e_QSZ$^R>}c+D!Ef[0~hvb0#/^j[b)JH2{]Le,Jbq/^' );
define( 'SECURE_AUTH_KEY',   '4%#5xtx@f5=At<r99e]D9.tf- }YPE7=z|HeKh8(R_,~#;=HIPjw3^X`l!m01xWG' );
define( 'LOGGED_IN_KEY',     '1|OA[%HsM={`>Uv0OkRV.?{P[%A9joN-Bbp?a^CGS}LK;VPF>`#~$XR/ped^z!kp' );
define( 'NONCE_KEY',         '54M2*H_hv+8?9R( +Fzf kbNzf{>|Ej:Xs7p7$h2YJmh6a3YIkQ?Q,Y|5lM<dPqt' );
define( 'AUTH_SALT',         'uxiW_`vi5-a[LOyP+$HR%id0n7JWajZ4n>>sCJZ}(?FEYXvtlG#V)]?RR_{|4PMm' );
define( 'SECURE_AUTH_SALT',  'JSVNt@<6alXjw`OQ8R2=uUyk&`jJ=t%VE{;*YG&AAhAi-&euSx.oR}4*}>Z|#0Jg' );
define( 'LOGGED_IN_SALT',    '&N(u2?~b;u,X,{z[3D~4vmi7brRmyC%P#ZP%|*u^z`/s^m wNDz:G2y&E#vZDe)K' );
define( 'NONCE_SALT',        'q+[XxXoDF,TADH/wRrxFBhqJSJV&zojfS^rSlX(0V[F:~MH6cY5.168;3Incy[S)' );
define( 'WP_CACHE_KEY_SALT', '1RBlTbW!A#Ud{fo&)3`@8a9+HBtKDbt}-w4,x,A02j,i2u8F-nUxF=,RKh{{{AhJ' );


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
