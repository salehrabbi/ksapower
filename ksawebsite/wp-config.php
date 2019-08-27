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
define('DB_NAME', 'ksainf');

/** MySQL database username */
define('DB_USER', 'ksapowerinfra ');

/** MySQL database password */
define('DB_PASSWORD', 'ksapower ');

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
define('AUTH_KEY',         'QTJW/N5^h~[FJ+`5/vbaDf216D$A+H|Ej=pABw:[XdvSVcVq_;9Mb=c-P_IRN33j');
define('SECURE_AUTH_KEY',  '(cRW+G{o# `;sT@ &p(W<}<$*K?e)|l*Q]6;ktSkmU~yjyjW%U;]0G2n/o|y=v4Z');
define('LOGGED_IN_KEY',    '@Tu,%]z`?;x|y<4U!K+x71kQ8_9`sgGw?/5/k]Qd8zw(xr7&Ru}3j+EcUXj_suN=');
define('NONCE_KEY',        'W^OAGqJHbc?b)6gOtBX%5<S<`w+k7%qNOI9|obd$D%e1m}x#gV:4so_M^DQ#uy29');
define('AUTH_SALT',        '^pJGI]ek&P|Pew.R|_362kyzUFX|>q;9O;SHB|7zgimw8%Q&8a_HY|Bt-8-lD!88');
define('SECURE_AUTH_SALT', '3.?kKHNCUxHR3!->/88pe]*y>FV9sp!rDl{vk;=YSOQHhW<YcX`R7$!D,9]pP3&X');
define('LOGGED_IN_SALT',   'Qs:vo6=:E1$FFDpR?$QzOqCZFzw{x7AqJI^7V,2:!Lw)_;2qfixp0ZT0v>trb=l?');
define('NONCE_SALT',       'd;:*3qQ^_&52=2/60&@>?:>B@UVVY!Jb~FQ@|@AU:zM=[:WD6zW4^`8~5X$/OaY{');

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
