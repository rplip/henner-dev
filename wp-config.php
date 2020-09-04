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
define( 'DB_NAME', 'henner' );

/** MySQL database username */
define( 'DB_USER', 'henner' );

/** MySQL database password */
define( 'DB_PASSWORD', 'henner' );

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
define( 'AUTH_KEY',         'FcgbQIVDy%({8oz8B.0:L^xcw.4oIK8}F~~LS{w97^+kX1^(:}&TXE0Vs@*3P0Z[' );
define( 'SECURE_AUTH_KEY',  'GbV{P`Z_ch6}l8&tax$~Y[|n0r;/E/TQiPbAl<QY/^57k.t;h}eo>l=><Q9W;Cxg' );
define( 'LOGGED_IN_KEY',    'd<[-R&WJK@Z_xX,xoe 9m}=wFBsP1hl6A:V@3ld9:{^VAyq}#K?f=gKSiyKAUahH' );
define( 'NONCE_KEY',        '9WY$YNj}5(I/x+_)#`)W$Gw&zj4!{JuO3<8O$Ymo<OGBa-*j* X8V;+R3}Gj*Bz=' );
define( 'AUTH_SALT',        'hzF6I4W:acJbh4hx.D<+mHW^2`YDX^O6;R@|@HoZ!r?mGA7Ie9#~~tw*?,l2TL[Q' );
define( 'SECURE_AUTH_SALT', 'RC}SyGp%B[~q_p_q!7> Cy9Z-UkAAnL`!}f6]2.vN%EP;?8m(.Fm34HC6D(yy=it' );
define( 'LOGGED_IN_SALT',   '[Hr= ;u6;c*4v]8^5TD)p+5H}!}ovB@M3,c=`1]5[m$>a#rHwRG,j;cK=zi/`X(g' );
define( 'NONCE_SALT',       'q;TSseG>]%C)s5XtXI_C`VVSVR_aAm}qk6tzHCQ46^qA>Ad04Aa_:.muwMTCvh<%' );

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
