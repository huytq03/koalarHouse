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
define('DB_NAME', 'koala');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'FTP_USER', 'deamon' );
define( 'FTP_PASS', 'xampp' );
define( 'FTP_HOST', '127.0.0.1:21' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4j1ANV&kn=j`yn&f_lK!3b3}^q~H@o*i^Hp`,ur|xy`rJ}O*P):~zo<O457[L23a');
define('SECURE_AUTH_KEY',  'yya~G3MF8IT>N%adI*dH;Yp]%oj0mh(eS{@/(K^Q]6?x@T[moRjj5v[RPYM %4{p');
define('LOGGED_IN_KEY',    'Rs,YUW`l@JR>!@d,VuF f7{2:|dY[|y[&7F{eI>?V p#+#E P&RF;I_Yw5>43A32');
define('NONCE_KEY',        '~1-ow7;5n]{+Aw0XhazEcWf41ssp{=fwUm^X|U!ePME4XMpcGkkeC-x5u:K9,sSD');
define('AUTH_SALT',        'c1Bx[}U<_L2MydQfu5rV~%A)u;a;J:rGYGNfMJo-PdMe#_[xaI@u|6QkyB|cbI[W');
define('SECURE_AUTH_SALT', 'ZvK?iLzp#@a!Gl$1!%qu~5X{Ss2-F$],[5.[Qt7&JFo]Rmma(n>)@n.1pJfa]4l*');
define('LOGGED_IN_SALT',   '6szJ_w~/sJiE#g{G:-(g?kQ*`bk?:YMUycJzUSo^hK>#2Ct8Bp!p3`!L7ITTbxc3');
define('NONCE_SALT',       '[UWdkj090GN(FDu]2tnu+A3fh>lzX.x)Tm)[~wfQHT]>.tiM8f{6}+GuOh+g8z)#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kl_';

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
