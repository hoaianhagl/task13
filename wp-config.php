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
define( 'DB_NAME', 'task13' );

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
define( 'AUTH_KEY',         '6zv|#*nlQ(]j[Bq,?y$FXqt}9uB|>S!:K,Q&aK0wEJ2JV;)2jGKgwL^/S%p#ZNnr' );
define( 'SECURE_AUTH_KEY',  'aS=:X,yc%AfVYQw0]p_*<DY#vj4?LgxFUN?*#K{k!&RScMy`,_|I_(Zeq^cJKG{G' );
define( 'LOGGED_IN_KEY',    '^0emwj@29ZZj&@$:TdSwSc!PfyszEp}QCIqrmX?Sa(H0cq1(H4Shxhj#(([W0tS9' );
define( 'NONCE_KEY',        'BJ=%dg`/!-Zk8(P]y>nlPtTAgW_3.+%`$ATU>QczNpg&pcITW=x=:Bl,y^K!7$fn' );
define( 'AUTH_SALT',        'do{tEx3ns/UKTE< yV,w0G]Y^xhF&mhlWy|t5}GA;)O{I/U5^(<hq`K:Wp.}&~iN' );
define( 'SECURE_AUTH_SALT', 'BYOdd/E~R0l2@9Gl$/Wc++rW7<M(pmzE,eiLCveiq:,fYM;nm:herM9p2^t-Z6U^' );
define( 'LOGGED_IN_SALT',   'uBwp_Uhk^EnM#iu3O%z@BYZUO@3oU_xX_-3Y.N>7jUy1:s]n(^w+-AKc9wm|UnEV' );
define( 'NONCE_SALT',       'g.bUulLup<=)L3>{qjILW^C:jORemq8#%+aIxUIH3*;tzrLuXF| zj1haO]EgI4C' );

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
