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
define( 'DB_NAME', 'gokudragon_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Np@Ar}:SiXNevuJ]eV$8dOfZ~nQG}+}$|h6w+e0]AaUR1!MUAs)rgB@xnZg|*/hv' );
define( 'SECURE_AUTH_KEY',  'd2w:@yTt?7#2Wv7PXmF!e`YE{lP=3i_NOQ/=h>2d&M(8/)~V({?igvc2i9EanfRc' );
define( 'LOGGED_IN_KEY',    'ij}F6iTbF~A4)oHS^>[DK(EAv[^0.@s80F| N0Ah^}RRWAUyC[8euOt*]lq6.t]w' );
define( 'NONCE_KEY',        'V*XVZS!A`h.ZV&h(DXL^ueFx}#^fK?N+yMVb0j2w7c0)]B,Mkz)X6j. BP6UIVI>' );
define( 'AUTH_SALT',        '(HGlf6{*a:i/U4]Y0SZw:LK)* 5HF6.Mh6u{k=h:XB#*`I[)%HT^aYJd{;r%)GaE' );
define( 'SECURE_AUTH_SALT', '4WD9s^1lSIb?d3N@|gI-8.l*G;}rU#$mGbHhMg (;JS}O`E;uT(ftT=`QT;u|fv2' );
define( 'LOGGED_IN_SALT',   '9E~Q!vpDp[c{m>#:bHpq-GhQhXd+|W-<Lix)*Bcfy./^FK1Yaj~W^~^ILheQ|RY!' );
define( 'NONCE_SALT',       'K4M<p/~)/K+5/nF{+sj@3/NH}Q.+6[uCEPG$IdAh>#E UqpsBiqX=]Q/uy@+=#ee' );

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
