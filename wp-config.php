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
define('DB_NAME', 'gitweb');

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
define('AUTH_KEY',         '!<<9t@!:}5gSyD-_bQy@RbQ=FiLKW`[<_8wiVTC4cd.JE`00PA;>`|$;)k{#DGTm');
define('SECURE_AUTH_KEY',  'L ux>`{$IByQ$3:Y<]m)!&cOaJm@w|^Hu-MK[4gv~kd|AuKLQvR%u5^DC8L9b5/s');
define('LOGGED_IN_KEY',    '`=C=qA0%TOPx0r,[TG<4A4RIT.)^{),[!okt}1E<o5$uPJqf>,o@211Dj5=$6v<{');
define('NONCE_KEY',        'v<+$bUf$SXybqUK)_/T,o B.XCjFYL|NRK+ObCY0|E9o-=6EN:yPPExH2LW5=TJV');
define('AUTH_SALT',        '+f4O[4&LWtMk6?[eS}4hey?PDmO/;Npm=Nk@,W=7d-K/G)O/=RUtEFyp1P7+[YM$');
define('SECURE_AUTH_SALT', '$g.mYomN!`Ywpg5{}3oWi+22BMnW_RRMt];g|${a?>+~svWEwpI4C9!sMwl#/doQ');
define('LOGGED_IN_SALT',   '{`8jk*-i?I[6X;;8a48]r[t8{GD9ICy93:Ys4(Q<t9Zz_gdh4^ez^v+,RAClh$Wy');
define('NONCE_SALT',       '3)K6eUwui?wv@WlX%=k95$/ nDZ>(xF#tlY_5IT`6{5QbH1F}/fB*j!`)G9HR>I$');

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
