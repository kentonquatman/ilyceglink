<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'glink_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a%]<7#Gu/~_A2<Z/w?h}bq?R&pd!I!+dUP,[[x|2{e5t?OaG;zPi?2ag<FQLvCQK');
define('SECURE_AUTH_KEY',  '}c@Mj.d#@bTY)-ydDN74wjrej/2F#Z}7$]iA3Vbl|2kvG|)&A|n-N!C&02W)-n|-');
define('LOGGED_IN_KEY',    '`YJrxuHwdi4?)t)..S3URW#-lj}us*LeyRN+8xH*%Nf+h!|$PUWAsf;Zn$o1:!Y-');
define('NONCE_KEY',        'x@R~d-2}~!0mw%<.MGxQ=g{/$`72.C|O+R*p]5?-])S+l?9SIF:I]2v ]o5F3i8#');
define('AUTH_SALT',        '_|_]vwhLPS?_Ngv|nXa<KAMF-0zc&#16`Ycd|u3J4{|!*t({CS;/@.Y%`rLDY|A}');
define('SECURE_AUTH_SALT', 'W}u#EvF+e-d_g*Qf#+u7/cSX,!u%v:TC~GHT|Nh`H#!6sKh+X|OpI*vYDIvnxc{-');
define('LOGGED_IN_SALT',   '=Tct<~`w+a42P[w]K0fo2Ss!p5PP8[Dp=5;1Dhg!RUf|--?j/{YKQ8n74m<(_S_.');
define('NONCE_SALT',       'd%Y5:X,cXZUe@[W|jBf(<Kj W{3}A:f P0rMqR_4Q(HCvYw-B]%BzI,i&sM>~vG[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
