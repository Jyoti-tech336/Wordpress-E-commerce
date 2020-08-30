<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r+vu.1m{d:5PHTo(Gnn~0!Zd|8jZ@&*H^HZ4if!x>F!Im7!=%1#<S-hV_t<xP(WF' );
define( 'SECURE_AUTH_KEY',  ' ^+z*)Uh<Q3c8I!PI%~[Q>TY`Z*+!EC(Gj(62+5?>j3nN(@P)k;WrPf[0TH+-y&E' );
define( 'LOGGED_IN_KEY',    ' ~+1yU>u/XGT`Qkbh}fQ}LeCFU~&rCued>)N 8`ag1anO^f7!xo2|2PNVhUx?#aH' );
define( 'NONCE_KEY',        'vi^[S<*hHde$UR_Hv8wN94MLX_KrA1G#/bImj(@0LeWr:#b>z<14%dUkbs5SVI@A' );
define( 'AUTH_SALT',        'zrGqaflJ)WJqJp`,IMYhRhMs?ng-poi`k>-pdeaRLk+*on%g}am>fV6<Xj.GxuG9' );
define( 'SECURE_AUTH_SALT', '[n5-2oIC5*.{B`:n3i6~]c<>Kd*_;4F%Mx{ES&>H8k=|d,[Da@!a0<XgSZWrG7fV' );
define( 'LOGGED_IN_SALT',   'bstq<6.;}R+!>!![x (}N@;.wg1*7l]5|*e3bOrK;EGttybk1^?$[1iXb!e,D>@q' );
define( 'NONCE_SALT',       'XlHam]?3osZ$)T*VRoC,hX^Hwj-eB1|Yx0njanoNY9D~}wPns[VZi=d}tXp(=`5T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
