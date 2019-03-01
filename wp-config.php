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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'softspot');

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
define('AUTH_KEY',         'EgYW5fa#To6PBw]&T(L%5rnYg`9!4o!$|2zy1j},C=~}ixoYji;yoEH}Au}}xEPl');
define('SECURE_AUTH_KEY',  '5.uE&4sNDz6pjJJyf^`aFpeBCW6]c;3Rd`+ycD1;&ALPvfSwtJqf_Y9oHw tU6:*');
define('LOGGED_IN_KEY',    '^l7Y.4Lj)C4xRP9xF]!e>];+U-y `:.lvwvR0#C>S@;nvHLacj:h.N1CqHLBKX5T');
define('NONCE_KEY',        'x7nd/A3&E;/zSYjb[7BH8<cYszp5k~&.W`QXZDL#4f}OA^DNN2Z3Ruw#F_2XrYhH');
define('AUTH_SALT',        'Exv!2i]|2yGH.V<y;{YxC:T0B)tMv&A0tFqA8ZUQwUg6VHnE^-56~5Ln:kQw%&h}');
define('SECURE_AUTH_SALT', '+P^t8w tqLlVh;pi*W<wu,-8VKm-WC6nmK.H,.8-.m,=X!.B%xMk[jgdg%@PUF)y');
define('LOGGED_IN_SALT',   'mPhMA`a))(c^C_].axru2)9P+<+( +5]=^;9)p@A!cX3xir)2fAbSZ]0cMwK:9@~');
define('NONCE_SALT',       'vU[V#zYO!1U8W084,>{,|<;|pdsyNBf*()F2+h)SCm0]W3f~!}e;lO!< 7i3Jw-f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
