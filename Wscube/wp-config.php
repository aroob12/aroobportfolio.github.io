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
define( 'DB_NAME', 'wscube' );

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
define( 'AUTH_KEY',         '_rGZ/lp-qPKU{Mu: Y;uInaVAC^v<#eaA?%[lF_rSvzXZ=A@Xq$X{$h=uBcbAMDz' );
define( 'SECURE_AUTH_KEY',  '_qRWPr/]@r5d;nA-T-L#mPsp$jK3Bfk|o||8yWZ`/#lbVk<Xzj?zRwkaf;-$hXG~' );
define( 'LOGGED_IN_KEY',    '<oq<Lt`_M!mqmDct`##*1Oh-lfO8R|;^juIA!t!Ke,41Y7AbWy%o`Whnx}:O:%;&' );
define( 'NONCE_KEY',        'cdoecK:<6kIUBZ3KdZHlI.GW`Gw}wgg@*GL(CXzpN(!b-8|=?nk(a/j:F$O9pN6~' );
define( 'AUTH_SALT',        '18R{YjI&HG.LQ?ZiSW1:q@NEr7!ggP#D05m1..,~6MaA,x]6j06jEs,63V*x6d4-' );
define( 'SECURE_AUTH_SALT', 'APrJ2U/I2^]buWx%A^$uz.@|,xC24+XC1sy2mx7:Y(8eU!u&evGRU:$@ ;(d1n_z' );
define( 'LOGGED_IN_SALT',   'Q~|XeKh)_AM%Lge@*h-{o?Z(Zq)F6]>rGppdmc7UdD3_)[1djEb62(1reo7I43g:' );
define( 'NONCE_SALT',       'y5>[[>nCq`u3xkXmv5 @r<]DISp!pCw$.n|]wxZEsD]W|fN78+uVZe}uI1<}:H1Q' );

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
