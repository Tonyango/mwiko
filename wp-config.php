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
define('DB_NAME', 'mwiko');

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
define('AUTH_KEY',         'h1<BQrim7(IW*8j[l;ufA1 F%O(9A`<[+V>lF}HP5K./# Hh_XN:j{1dSuwPISxr');
define('SECURE_AUTH_KEY',  'm;qaQIfny3KBzXw]uVK+ka]YmjZRKJ8]Cgo**t2H]~0Gy8K`5+QC^smxXz~bzbYk');
define('LOGGED_IN_KEY',    '0;uT_-*O#PEAqGQ+&+&V  zRk=STPRyO}s^CJ[PMTX97C%m!T<?p5DBvX/`}d.$=');
define('NONCE_KEY',        'oG>eaJ?rMuAop.gWyKvOE%}4>(7&Wjw^~<6B:U@MOS!Fp?M5[Y$xl?#q<Sjq}+6[');
define('AUTH_SALT',        '8yhI|Uy(SixqOxztbY7WN.y*RFv%v$7>k)4s][zrpj D;Yl5M^(ceTO[:X6Gd[!n');
define('SECURE_AUTH_SALT', 'd|S%B^HLGC7AD2$YxM/0N3?{JfCZsO<%}HgY0k ifb7i0k;X(D|LZIJvc1HP@Rr3');
define('LOGGED_IN_SALT',   '=SA/#|NSX)UJcx:OQ;ZQqE@G%e&:l+J)Oe$EW9C):q.>&_A,Ll1$!`fM0=u8%=Yn');
define('NONCE_SALT',       '#e+5([SeHlvJg][]0QZ[l7qL^Y+!X_18TYUIT9[6n0h}POtU<sH@s/7< kIz%Jkw');

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
