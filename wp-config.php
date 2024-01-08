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
define( 'DB_NAME', 'test2' );

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
define( 'AUTH_KEY',         '=-O@xTy/8#df=~tiI_7`)tIb2VAi.,E2)3GO!ck0z<rj{xzm/u.ARv!Pu5KS5?T(' );
define( 'SECURE_AUTH_KEY',  'P4*om%gI7sHtngVT@Hvz<q{8X<kj{TceyjHF.Jzo%Pdp&aZgI@e+-=<Uo/Ko9J[V' );
define( 'LOGGED_IN_KEY',    'S^R9E,9r*<Y6=I)n4c>uwS/@Ih0o&N=rbhV0!*6eH_xm!nxst%|(>.Oq%=:Qv_bK' );
define( 'NONCE_KEY',        'DZw[U/E|I 63k=eK^aqbbYn^gv:!/9EE{d/&l&Xzc3gxDM|px Td8J2[B4gsPO4w' );
define( 'AUTH_SALT',        'W?pXtX{6N9S(1(u<j0aj-6c23gL?7^e<gZgOlFKuzRkeqKS/$Bk^-CNX,._iU?0o' );
define( 'SECURE_AUTH_SALT', 'ER@M~k#/d6BHL#z1^2B=fch$%mi$86hWkKKB[6B>)Fch58z-vdWUO.?9L>/!m<wT' );
define( 'LOGGED_IN_SALT',   'R9mK=im^<d,*>lxRPm>64h]>`$ACYi OJ0!f4m/E?HSrEQn`EhZ!tdiu9o:U1H:(' );
define( 'NONCE_SALT',       '?byuo25??@|G?(Ix% XN1v*7D.Z|CP?Y4Y=[h|[DG+oc(f`l3y4-L5LnW)*v22c|' );

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
