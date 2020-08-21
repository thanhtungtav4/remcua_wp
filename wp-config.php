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
define('DB_NAME', 'fonicweb_remcua');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'mx]w^2&+7Bv]/Q0N`XadL MV74Q]NZ8!t-W3_hDc&T#,Bx(X=$S;JPjQF_AkxH@d');
define('SECURE_AUTH_KEY',  '|J%HCt8d/eFGA</#JI45iM.jAcdhOZa1r&H6pQ^<B@/Q<8E?ytbY}BloH>6}K cO');
define('LOGGED_IN_KEY',    'ApxA@`564}]!V,l~kS0P~iukYgxx`C/w~jUP9$36wcVSsA%K55ZS-I9pJkq!3*4q');
define('NONCE_KEY',        'KFSfK_-D,^zoR4bnZ9o0A*Ci.Hp]6*wWzm$hs5+.z*%U_kI|qVDj1GJFKssJx$qU');
define('AUTH_SALT',        '^FB(w&P 8,4`pVriahaaPP2F>dk6~4!0m<y502{{?Nt#X:1KH.-rH;4BsAHe09.,');
define('SECURE_AUTH_SALT', 'n~&AHy*=Z6SYVEBrVRl&sukywZg{%Q?VY,Qd1Io|.RLX,{ENKb:oo9T[17|FoiK1');
define('LOGGED_IN_SALT',   'D VVqjE{k ,Uo=C26[Vfj?s,M-)0dVcAv/?uhL^ Kh<;G6`O/N#|7}I^w]Z&a+9D');
define('NONCE_SALT',       'v0k:sPYJGlw)4j|bl4a$v1keFQIo7oo5^7c(%3 C35W?ef02x,zb~gCU{o_xSTWI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vf_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
