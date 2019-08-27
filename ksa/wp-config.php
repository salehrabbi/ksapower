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
define('DB_NAME', 'ksaweb');

/** MySQL database username */
define('DB_USER', 'ksapowerinf');

/** MySQL database password */
define('DB_PASSWORD', 'ksainf');

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
define('AUTH_KEY',         '/~IST>zQ/f5JZ&BkCZ7I/h&|<1yM)fTs]@2NDk).pJKchd{`fTbJndjNc+gP2>lx');
define('SECURE_AUTH_KEY',  'b;t3 sx;-8kV%{xG)9ZGj0 9L;65Xj}Bh0JganZV?LL3>EnQsFNI!oYoJe78xai ');
define('LOGGED_IN_KEY',    '9%{cV9,3Ji  U4ETG)J51&?Nu]4KHYoV+?[zI ERN)XxY~SYVaPnk%A0k0)AmiMA');
define('NONCE_KEY',        'aco oHXr|96&#9u4!AQFga1oOe/rIH2q`nT,cn`<$d4#>rDWv!u95nu=WdiWDHn(');
define('AUTH_SALT',        'B1zcRn7.Z68TptQw1/9F0RRR[9DTPpI>07oB[-7EgqhM>.]Lh#4O*N}[*-2mZ4#@');
define('SECURE_AUTH_SALT', 'I).,?TOtC[w+;6cfFuU$}/H)W)OOYDL-OpFZV,?5h,.11lBNr(99G`T}2j[C8mFG');
define('LOGGED_IN_SALT',   'e%3)A$,@Zc1Uj7cHiG-h/P*z%FeF<Eh)cU_X>?%@f`vRJG*&/Z9j[3Ta<DPqS`5Z');
define('NONCE_SALT',       'c%U(h[)f-5=Dz.Q_Dc[0{}t4pTw&``AKBi{/9Gid]1=VE<3svp^DGie&_nx@@~9e');

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
