<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'palestinethreads_db' );

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
define( 'AUTH_KEY',         '9Bi7k6}?7J=!^%}ys37TQ[DP}y%&pI#v-(jDZ3tJ&(1GxFkZd?^CMz0r{x+Q.IHY' );
define( 'SECURE_AUTH_KEY',  ']^`*3gn~v96.]o1c*CWZ<K@Rs-D^B8_)8$* T^U[cD >E^ZF^f`Ol}x6oL`[q4/k' );
define( 'LOGGED_IN_KEY',    'D)}a8Vj55Te+Nte)AF&[2L&to^R)&S9i.x$ZYE2yks}n7-45j,k.Y1D1f9XdUV8Y' );
define( 'NONCE_KEY',        'Wy1RV9)|IsyS07)-RMuO2@l9al(%SDB:5Ik1c Z7m3mL%P[O[Be;aWBX6bxDwV8^' );
define( 'AUTH_SALT',        'W g]I>[?3F@Sb 08@4r1s@2!v2}^yX;ni2;VvOqu.e@.aw=n?:FT/oM,%r{>*bQ+' );
define( 'SECURE_AUTH_SALT', 'g^[;VTJhVEppxf_>5*v4^Ja[RRiVJjg}}Edlmez;_DfP,6v>.)ZL3CIV[G8_UgvF' );
define( 'LOGGED_IN_SALT',   'g:V]H@jDtWz!F0MPt0tqF$qC&tjxn1gP$dS%GVC/  gK{t^2J#_:Ihh(j&8uC&4s' );
define( 'NONCE_SALT',       'O%2F=IV{/3AHh=v;zS-z)@l:&3_4OU}zvp<9pnA:%wJ}1(;c5-FIS.{K_3wk:%(B' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
