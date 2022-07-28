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
define( 'DB_NAME', 'odc' );

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
define( 'AUTH_KEY',         'DSp+54,k B `T-H5FX3Hd&J 6q|F+FZ8VAa3tU0@xR@0HTG9yyi6ah3V#p[d0|vj' );
define( 'SECURE_AUTH_KEY',  'KRFavEAh0]}*mSh}Hej=BTKt9/|-l612>{)N74bRu}q096@7E:3ibG7t@~2iL^[A' );
define( 'LOGGED_IN_KEY',    '9OV~.<[G`q-0W*ZzcY1IbOpLR`X^rXz]><u=P{;XsvZde!ft|nPku%S xNTs4CpE' );
define( 'NONCE_KEY',        'f_TYGQuo-Mc$V$ Bc0QV-!j;hBs!BjXY <:2F{}@R[b1EVR(e`Dof~Pv*>cBd?[^' );
define( 'AUTH_SALT',        'g1b{YT-XbWJu^.*$bM$QTg?yD )y/hd$#0P3,t7(Qg5Z4i`3Az_co.;%+lzyvQP`' );
define( 'SECURE_AUTH_SALT', ',T1)kUxFl.4IR!czHn)^}@Y?.YmPJn$Q/XHrgqg:`slVx@H.3eQ4LaO?2l)PM$=-' );
define( 'LOGGED_IN_SALT',   '9gdYwfFuqVm)mspyQF2QPz2~N]>K>TwRNN1x0%27D#X2Cpx&UnFlV=PE^Rb$d~`Q' );
define( 'NONCE_SALT',       '{?-3iq?w]t~M.FsUfB`pMm;:{rEl{GP}nr0jMlGSYvwD%F&@L;9W}@,td5Z!odXc' );

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
