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
define( 'DB_NAME', 'breakoutcompagny-redesign' );

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
define( 'AUTH_KEY',         'jY1h<%,qtt-)/wc-wlmQ1/tJO~t#m`,hWxJ5tXrU/d2:BK=u*p=GU7(]1|>D>6oE' );
define( 'SECURE_AUTH_KEY',  '8mqf?fD2.RaY=k~*;*3WS6%.<C87V!>A[yXf$W{N?DsYn=8KVyB,L%H8<OAA{F`o' );
define( 'LOGGED_IN_KEY',    'm>b;z7ET)i>3-G6>(@Ne2$tq6%h`J^#z<`N^qzq 6[Z^41P8Jz~~`30p;+J)Df}D' );
define( 'NONCE_KEY',        'XnF(=S#78ny{dyT/-t7Iey&d3:~L$K)f2(+t.TNs^S}8Ojasi%/fYvCGNQU[S_%/' );
define( 'AUTH_SALT',        '#M8<3JBY#9|eBRt_(A)HoT1#J%Bu/`s:q#Phd)3&sH)%%}vM/qw0N5F}?7aN%S-a' );
define( 'SECURE_AUTH_SALT', '5fEM4gWrrhP)+GgRf|_UKZJPib+zp$]S K`1c5r2c:Co*+ GEoODgCllb!hgxi*.' );
define( 'LOGGED_IN_SALT',   '_VY,N_e$g;Hwc;LF4Te^3s?Ii g;f;yRG7r-<KgQ5GHR:4~Kn+NoZ@fz|bK/DjJ%' );
define( 'NONCE_SALT',       '03?7:zUF@ZC&%EyabW*2-,#Y1^xFV]ux!e}_U)j;bYXxU CCnh`IvwRqS2(dRQqG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bcr_';

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
